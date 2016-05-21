<ul>
    @foreach($groups as $group)
        <li>
            {{$group->name}}
            @include('groups.group', ['groups'=> $group->children])
        </li>
    @endforeach
</ul>