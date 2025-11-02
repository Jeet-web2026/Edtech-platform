<div>
    <div class="py-2">
        <div class="company-profile-showcase">
            @forelse( $partners as $partner )
            <div>
                <img src="{{ asset( 'storage/' . $partner->adminDetails->profile ) }}" alt="{{ $partner->first_name . '-' . $partner->last_name }}" class="h-20 w-30 object-cover rounded opacity-75 hover:opacity-100 transition ease-in-out duration-300">
            </div>
            @empty
            <div>
                <img src="{{ asset('assets/images/course-img-1.jpg') }}" alt="cmpany-name" class="h-20 w-30 object-cover rounded opacity-75 hover:opacity-100 transition ease-in-out duration-300">
            </div>
            @endforelse
        </div>
    </div>
</div>