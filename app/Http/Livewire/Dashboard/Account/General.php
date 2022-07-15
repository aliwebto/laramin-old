<?php

namespace App\Http\Livewire\Dashboard\Account;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;
use Livewire\Component;
use Livewire\WithFileUploads;

class General extends Component
{
    use WithFileUploads;

    public User $user;
    public $profile;

    protected function rules()
    {
        return [
            'user.name' => 'required|string',
            'user.email' => ['required','email','unique:users,email,'.Auth::id()],
            'profile'=>'nullable|max:1024|mimes:jpg,jpeg,png,bmp,tiff'
        ];
    }
    public function mount()
    {
        $this->user = Auth::user();
    }

    public function update()
    {
        $this->validate();
        if ($this->user->getOriginal('email') !== $this->user->email){
            $this->user->email_verified_at = null;
            $this->user->sendEmailVerificationNotification();
        }
        $this->handleProfileUpload();
        $this->user->save();
        $this->emit('toastSuccess','عملیات با موفقیت انجام شد');
    }

    public function sendEmailVerificationLink()
    {
        try {
            $this->user->sendEmailVerificationNotification();
            $this->emit('toastSuccess','ایمیل تایید حساب کاربری برای شما ارسال شد');
        }catch (\Exception $exception){
            $this->emit('toastError','ارسال ایمیل تایید با خطا مواجه شد');
        }
    }
    private function handleProfileUpload()
    {
        $profile = $this->profile;
        if (!is_null($profile)){
            $this->user->updateProfilePhoto($profile);
            $this->profile = null;
            $this->user->refresh();
        }
    }
    public function render()
    {
        return view('livewire.dashboard.account.general');
    }
}
