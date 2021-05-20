@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>{{ $title }}</h1><br>
        <p>
            <h3>Introduction</h3>
            <br>
            <ul>
                <li>Who is behind SIXERR?</li>
                <li>What is SIXERR?</li>
                <li>I'm new what should I do?</li>
                <li>Where do I ask for support?</li>
                <li>How can I create a service?</li>
                <li>How do I join the freelancers program?</li>
                <li>Where do I report a bug?</li>
                <li>I have an idea for a new feature</li>
                <li>I want to know more</li>
            </ul><br>

            <h3>Who is behind SIXERR?</h3><br>
            <p>
                If you're thinkning about using <b>SIXERR</b> you might want to know who you're dealing with beforehand.<br>
                <b>SIXERR</b> is developed by me <b>J.Coca</b> as an individual. I'm a developer and this platform is privately owned by me.<br>
                You might want to know more about <b>SIXERR</b> and my goals with the platform and are in the right place here!
            </p><br>

            <h3>I'm new what should I do?</h3><br>
            <p>
                First of all welcome to the platform im glad to have you here! Your first step should be to <a href="{{url('/register')}}">register</a> with us to get access to all features.<br>
                After signing up you can browse in our marketplace or read the community's <a href="{{url('/posts')}}">blog</a>.<br>
                If you need further help you can always ask for <a href="{{url('/contact')}}">support</a>.
            </p><br>

            <h3>Where do I ask for support?</h3><br>
            <p>You can write an email to <a href="mailto:jcoca@pm.me">jcoca@pm.me</a> or head over to the <a href="{{url('contact')}}">contact</a> section.</p><br>

            <h3>How can I create a service?</h3><br>
            <p>First signup and join the <a href="{{url('/freelance')}}">freelancer's program</a>.</p><br>

            <h3>How do I join the freelancers program?</h3><br>
            <p>
                You will need to log in first. If you do not have an account yet you can <a href="{{url('/register')}}">register for free</a> now. If you're </a href="{{url('/login')}}">logged in</a> you can access your account settings where you will be able to join the freelancers program
            </p><br>

            <h3>Where do I report a bug?</h3><br>
            <p>
                Head over to the <a href="{{ url('/contact') }}">contact</a> page or look at the <a href="https://www.github.com/JCOCA-Tech/sixerr/issues">issues</a> page on the official <a href="https://www.github.com/JCOCA-Tech/sixerr">GitHub repository</a>.<br>
                Please check the existing <a href="https://www.github.com/JCOCA-Tech/sixerr/issues">issues</a> to avoid duplicates.
            </p><br>

            <h3>I have an idea for a new feature</h3><br>
            <p>
                You may look at the <a href="https://www.github.com/JCOCA-Tech/sixerr/issues">issues</a> page our <a href="https://www.github.com/JCOCA-Tech/sixerr">GitHub repository</a> as well and open a new feature request issue.<br>
                Please review the existing issues to avoid duplicates.
            </p><br>

            <h3>I want to know more</h3><br>
            <p>
                If you want to find out more head over to our <a href="https://github.com/JCOCA-Tech/SIXERR/wiki">wiki</a>. There you will find more information about sixerr.
            </p><br>

        </p>
    </div>

@endsection
