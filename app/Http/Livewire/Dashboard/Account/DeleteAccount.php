<?php

namespace App\Http\Livewire\Dashboard\Account;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DeleteAccount extends Component
{
    public $accountActivation;

    protected $rules = [
        'accountActivation' => 'required'
    ];

    public function delete()
    {
        $this->validate();
        if ($this->accountActivation == true){
            $user = Auth::user();
            Auth::logout();
            $user->delete();
            $this->emit('swalSuccess','حساب کاربری شما با موفقیت حذف گردید');
            $this->redirect(route('login'));
        }
    }
    public function render()
    {
        return view('livewire.dashboard.account.delete-account');
    }
}
