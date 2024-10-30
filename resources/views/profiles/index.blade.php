


    <h1>Profiles</h1>
    
    @foreach ($profiles as $profile)
        <div>
            <h3>{{ $profile->profile_id }}</h2>
            <h2>{{ $profile->first_name }} {{ $profile->last_name }}</h2>
            <p>Email: {{ $profile->email }}</p>
            <p>Address: {{ $profile->address }}, {{ $profile->city }}</p>
            <p>personal_picture: {{ $profile->personal_picture }}</p>
            <p>gender: {{ $profile->gender }}</p>
            <p>driving_license: {{ $profile->driving_license }}</p>
            <p>birthday: {{ $profile->birthday }}</p>
            <p>nationality: {{ $profile->nationality }}</p>
            <p>marital_status: {{ $profile->marital_status }}</p>
            <p>achievements: {{ $profile->achievements }}</p>  
        </div>
        <hr>
    @endforeach
    @foreach($languages as $language)
            <h3>{{ $language->language }}</h2>
            <h2>{{ $language->language_level }} </h2>
    @endforeach



