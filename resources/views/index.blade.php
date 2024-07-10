<html lang="en" class="hydrated">

<head>
    <title>Awesome Title</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div id="root">
        <main class="container">
            <h1 class="title">Awesome Todos</h1>
            <form class="form" action="{{route('create')}}" method="post">
                @csrf
                <input type="text" placeholder="Enter a new todo..." class="form__input" required="" value=""
                    name="title">
                <button class=" form__button" type="submit">Create Todo</button>
            </form>

            @foreach($todos as $key => $todo)
            <div class="todos">
                <div class="todo">
                    <p>{{$key + 1}} . {{$todo->title}}</p>
                    <div class="mutations">
                        <button class="todo__status">
                            @if($todo->completed == 0)
                            <a href="{{route('complete', [$todo->id])}}">❌</a>
                            @else
                            <a href="{{route('incomplete', [$todo->id])}}">✅</a>
                            @endif
                        </button>
                        <a href="{{route('delete', [$todo->id])}}"> <button class="todo__delete">🗑️</button></a>
                    </div>
                </div>
            </div>

            @endforeach
        </main>
    </div>
</body>

</html>