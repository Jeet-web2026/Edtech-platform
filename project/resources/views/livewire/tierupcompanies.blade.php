<div>
    <div class="py-2">
        <div class="company-profile-showcase">
            @for( $i = 15; $i >= 0; $i-- )
            <div>
                <img src="{{ asset('assets/images/course-img-1.jpg') }}" alt="cmpany-name" class="h-20 w-30 object-cover rounded opacity-75 hover:opacity-100 transition ease-in-out duration-300">
            </div>
            @endfor
        </div>
    </div>
</div>