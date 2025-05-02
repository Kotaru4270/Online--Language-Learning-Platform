@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Available Courses</h1>
    <div class="row">
        <!-- Course 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://media.istockphoto.com/id/1047570732/vector/english.jpg?s=612x612&w=0&k=20&c=zgafUJxCytevU-ZRlrZlTEpw3mLlS_HQTIOHLjaSPPM=" class="card-img-top" alt="Course 1 Image">
                <div class="card-body">
                    <h5 class="card-title">Course 1: English</h5>
                    <p class="card-text">Learn the basics of English.</p>
                    <a href="https://www.youtube.com/playlist?list=PLJvrw2GDzjfNxavn9lpeWhPa9sQ0UXSgI" class="btn btn-primary">View Course</a>
                </div>
            </div>
        </div>

        <!-- Course 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://cdn.telugu360.com/wp-content/uploads/2021/08/Telugu.jpg" class="card-img-top" alt="Course 2 Image">
                <div class="card-body">
                    <h5 class="card-title">Course 2: Telugu</h5>
                    <p class="card-text">Learn the basics of Telugu.</p>
                    <a href="https://www.youtube.com/playlist?list=PLKEI4M7n-St968Bu4-JTYG4QWdZ0JTjdH" class="btn btn-primary">View Course</a>
                </div>
            </div>
        </div>

        <!-- Course 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7-PIY6k81xkBEOH_aXcaBZOiCjxWgQ1RXzA&s" class="card-img-top" alt="Course 3 Image">
                <div class="card-body">
                    <h5 class="card-title">Course 3: Hindi</h5>
                    <p class="card-text">Learn the basics of Hindi.</p>
                    <a href="https://www.youtube.com/playlist?list=PLDUiflqk4hOyvJmzhkCxK_6J-bUlfKTrm" class="btn btn-primary">View Course</a>
                </div>
            </div>
        </div>
        <br/>

        <div class="col-md-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIC4VjGjpxJtZhsIIOzgfsk0mtc83g-iv3nA&s" class="card-img-top" alt="Course 3 Image">
                <div class="card-body">
                    <h5 class="card-title">Course 3: chinese</h5>
                    <p class="card-text">Learn the basics of chinese.</p>
                    <a href="https://www.youtube.com/playlist?list=PLrYgra2FrMh_jGBcMmNWPnSh-kHwGiaXG" class="btn btn-primary">View Course</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQN2ZI5G6H3-B-cWN3VK3RofWNjNtn91V5i-A&s" class="card-img-top" alt="Course 3 Image">
                <div class="card-body">
                    <h5 class="card-title">Course 3: Spanish</h5>
                    <p class="card-text">Learn the basics of Spanish.</p>
                    <a href="https://www.youtube.com/playlist?list=PLg9Lkc-s4bOwO4h4I6JHqZb-u1K0pL2Oc" class="btn btn-primary">View Course</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
