 
    <div> 
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
                <label for="message" class="">{{ __('Message') }}</label>
                <textarea rows="4" id="message" class="" name="message">
                   {{ __('Hi, Your enquiry has been approved.') }}
                </textarea>
                <input type="hidden" name="enquiry_id" value="{{$enquiry_id}}" />
                <input type="hidden" name="enquiry_status" value="1" />
            </div>

            
                <button type="submit">Send</button>
            
        </form>
    </div>
 