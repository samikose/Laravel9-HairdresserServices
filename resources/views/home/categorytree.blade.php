@foreach($children as $subcategory)
    <ul class="submenu" style="width: 250px">
        @if(count($subcategory->children))
            <li style="color: white;font-family: 'Arial Black'"> {{$subcategory->title}} </li>
            <ul class="submenu">
                @include('home.categorytree',['children' => $subcategory->children])
            </ul>
            <hr>
        @else
                <li><a href="{{route('categoryservices',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
