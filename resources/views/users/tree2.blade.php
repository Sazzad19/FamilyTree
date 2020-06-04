@extends('layouts.user-profile-wide')

@section('subtitle', trans('app.family_tree'))

@section('user-content')

<div class="tree">
    <ul>
       <li>
        @if ($user->father)
                    {{link_to_route('users.tree', $user->father->name, [$user->father->id], ['title' => $user->father->name.' ('.$user->father->gender.')'])}}
                <ul>

                <li>
                    

                    {{ link_to_route('users.tree', $user->name, [$user->id], ['title' => $user->name.' ('.$user->gender.')']) }}
            @if ($user->childs->count())
            <ul>
                @foreach($user->childs as $child)
                <li>
                    {{ link_to_route('users.tree', $child->name, [$child->id], ['title' => $child->name.' ('.$child->gender.')']) }}
                    @if ($child->childs->count())
                    <ul>
                        @foreach($child->childs as $grand)
                        <li>
                            {{ link_to_route('users.tree', $grand->name, [$grand->id], ['title' => $grand->name.' ('.$grand->gender.')']) }}
                            @if ($grand->childs->count())
                            <ul>
                                @foreach($grand->childs as $gg)
                                <li>
                                    {{ link_to_route('users.tree', $gg->name, [$gg->id], ['title' => $gg->name.' ('.$gg->gender.')']) }}
                                   
                                    @if ($gg->childs->count())
                                    <ul>
                                        @foreach($gg->childs as $ggc)
                                        <li>
                                            {{ link_to_route('users.tree', $ggc->name, [$ggc->id], ['title' => $ggc->name.' ('.$ggc->gender.')']) }}
                                            @if ($gg->childs->count())
                                    <ul>
                                        @foreach($ggc->childs as $ggcc)
                                        <li>
                                            {{ link_to_route('users.tree', $ggcc->name, [$ggcc->id], ['title' => $ggcc->name.' ('.$ggcc->gender.')']) }}
                                            
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
            @endif
        </li>
    </ul>
        </li>
    </ul>
    @else
 
            {{ link_to_route('users.tree', $user->name, [$user->id], ['title' => $user->name.' ('.$user->gender.')']) }}
    @if ($user->childs->count())
    <ul>
        @foreach($user->childs as $child)
        <li>
            {{ link_to_route('users.tree', $child->name, [$child->id], ['title' => $child->name.' ('.$child->gender.')']) }}
            @if ($child->childs->count())
            <ul>
                @foreach($child->childs as $grand)
                <li>
                    {{ link_to_route('users.tree', $grand->name, [$grand->id], ['title' => $grand->name.' ('.$grand->gender.')']) }}
                    @if ($grand->childs->count())
                    <ul>
                        @foreach($grand->childs as $gg)
                        <li>
                            {{ link_to_route('users.tree', $gg->name, [$gg->id], ['title' => $gg->name.' ('.$gg->gender.')']) }}
                           
                            @if ($gg->childs->count())
                            <ul>
                                @foreach($gg->childs as $ggc)
                                <li>
                                    {{ link_to_route('users.tree', $ggc->name, [$ggc->id], ['title' => $ggc->name.' ('.$ggc->gender.')']) }}
                                    @if ($gg->childs->count())
                            <ul>
                                @foreach($ggc->childs as $ggcc)
                                <li>
                                    {{ link_to_route('users.tree', $ggcc->name, [$ggcc->id], ['title' => $ggcc->name.' ('.$ggcc->gender.')']) }}
                                    
                                </li>
                                @endforeach
                            </ul>
                            @endif
                                </li>
                                @endforeach
                            </ul>
                            @endif
                            
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
    </ul>
    @endif

    @endif

        </li>
    </ul>
    <div class="clearfix"></div>
</div>
@endsection

@section ('ext_css')
<link rel="stylesheet" href="{{ asset('css/tree2.css') }}">
@endsection
