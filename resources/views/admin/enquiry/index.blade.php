<x-admin.wrapper>
    <x-slot name="title">
            {{ __('Enquiry Reject') }}
    </x-slot>

    <div>
        <x-admin.breadcrumb href="{{route('admin.index')}}" title="{{ __('Enquiry Reject') }}">{{ __('<< Back to dashboard') }}</x-admin.breadcrumb>
        <x-admin.form.errors />
    </div>
    <div class="w-full py-2 overflow-hidden">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <form method="POST" action="{{ route('admin.enquiry.status.send') }}">
        @csrf
            
            <div class="py-2">
                <x-admin.form.label for="message" class="">{{ __('Message') }}</x-admin.form.label>
                <x-admin.form.textarea rows="4" id="message" class="" name="message">
                    {{ __('Hi, Your enquiry has been rejected.') }}
                </x-admin.form.textarea>
                <input type="hidden" name="enquiry_id" value="{{$enquiry_id}}" />
                <input type="hidden" name="enquiry_status" value="2" />
            </div>

            <div class="flex justify-end mt-4">
                <x-admin.form.button>{{ __('Send') }}</x-admin.form.button>
            </div>
        </form>
    </div>
</x-admin.wrapper>