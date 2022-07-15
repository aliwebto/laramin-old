<div class="card">
    <h5 class="card-header">حذف حساب</h5>
    <div class="card-body">
        <div class="mb-3 col-12 mb-0">
            <div class="alert alert-warning">
                <h6 class="alert-heading mb-1">آیا از حذف حساب خود اطمینان دارید؟</h6>
                <p class="mb-0">در صورتی که حساب خود را حذف کنید، بازگشتی وجود نخواهد داشت. لطفا مطمئن باشید.</p>
            </div>
        </div>
        <form id="formAccountDeactivation" wire:submit.prevent="delete">
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" wire:model.defer="accountActivation">
                <label class="form-check-label" for="accountActivation">من غیرفعال کردن حساب خود را تایید می‌کنم</label>
            </div>
            <button type="submit" class="btn btn-danger deactivate-account" wire:loading.attr="disabled">غیرفعال کردن حساب</button>
        </form>
    </div>
</div>
