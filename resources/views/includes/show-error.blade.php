    @if(count($errors)>0)
         <div class="alert alert-danger">
            @foreach ($errors->all() as $error)                            
                        
                <div class="text-pri">
                        {{ $error }}        
                </div>

             @endforeach

                    
        </div>       
    @endif