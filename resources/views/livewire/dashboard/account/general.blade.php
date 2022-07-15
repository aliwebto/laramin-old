<div class="card mb-4">
    <h5 class="card-header">جزئیات پروفایل</h5>
    <!-- Account -->
    @if(\Laravel\Fortify\Features::hasProfileFeatures())
        <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img src="{{ is_null($profile) ? $user->profile_photo_url : $profile->temporaryUrl() }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                <div class="button-wrapper">
                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                        <span class="d-none d-sm-block">ارسال تصویر جدید</span>
                        <i class="bx bx-upload d-block d-sm-none"></i>
                    </label>
                    <input type="file" id="upload" class="account-file-input @error('profile') is-invalid @enderror" wire:model="profile" hidden accept="image/png, image/jpeg">

                    <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                        <i class="bx bx-reset d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">بازنشانی</span>
                    </button>

                    <p class="mb-0">فایل‌های JPG، GIF یا PNG مجاز هستند. حداکثر اندازه فایل 800KB.</p>
                    <x-error for="profile" />

                </div>
            </div>
        </div>
    @endif

    <hr class="my-0">
    <div class="card-body">
        <form id="formAccountSettings" wire:submit.prevent="update" method="POST">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="firstName" class="form-label">نام</label>
                    <input class="form-control @error('user.name') is-invalid @enderror" type="text" id="firstName" name="firstName" autofocus wire:model="user.name">
                    <x-error for="user.name" />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">ایمیل</label>
                    <input class="form-control text-start @error('user.email') is-invalid @enderror" dir="ltr" type="email" id="email" name="email" wire:model="user.email">
                    <x-error for="user.email" />
                </div>
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="phoneNumber">شماره تلفن</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text">IR (+98)</span>
                        <input type="text" id="phoneNumber" name="phoneNumber" class="form-control text-start" dir="ltr" placeholder="202 555 0111">
                    </div>
                </div>
                @if(\Laravel\Fortify\Features::emailVerification())
                    @if(!$user->hasVerifiedEmail())
                        <div class="col-12">
                            <div class="alert alert-warning">
                                ایمیل شما تایید نشده است ، لطفا ایمیل خود را تایید کنید
                                <button type="button" class="btn btn-sm btn-dark" wire:click="sendEmailVerificationLink" wire:loading.attr="disabled">
                                    <span wire:loading.class="d-none">ارسال مجدد ایمیل تایید</span>
                                    <span class="d-none" wire:loading.class.remove="d-none" >در حال ارسال ...</span>
                                </button>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">ذخیره تغییرات</button>
                <button type="reset" class="btn btn-label-secondary">انصراف</button>
            </div>
        </form>
    </div>
    <!-- /Account -->
</div>
