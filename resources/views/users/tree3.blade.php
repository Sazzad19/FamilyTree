@extends('layouts.user-profile-wide')

@section('subtitle', trans('app.family_tree'))

@section('user-content')

<div class="tree">
    <ul>
       <li> 
        @if (isset($user->father->father->father->father->father))
        @if ($user->father->father->father->father->father->dod)
        <a href="{{route('users.tree',[$user->father->father->father->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->father->father->father->name}}" data-content="Date of Birth:{{$user->father->father->father->father->father->dob}},Date of Death:{{$user->father->father->father->father->father->dod}}">{{ userPhoto($user->father->father->father->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
        @else
        <a href="{{route('users.tree',[$user->father->father->father->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->father->father->father->name}}" data-content="Date of Birth:{{$user->father->father->father->father->father->dob}}">{{ userPhoto($user->father->father->father->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
        @endif     
                   <ul>

                <li>
                    @if ($user->father->father->father->father->dod)
                    <a href="{{route('users.tree',[$user->father->father->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->father->father->name}}" data-content="Date of Birth:{{$user->father->father->father->father->dob}},Date of Death:{{$user->father->father->father->father->dod}}">{{ userPhoto($user->father->father->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                    @else
                    <a href="{{route('users.tree',[$user->father->father->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->father->father->name}}" data-content="Date of Birth:{{$user->father->father->father->father->dob}}">{{ userPhoto($user->father->father->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                    @endif
                                        <ul>
    
                    <li>
                        @if ($user->father->father->father->dod)
                        <a href="{{route('users.tree',[$user->father->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->father->name}}" data-content="Date of Birth:{{$user->father->father->father->dob}},Date of Death:{{$user->father->father->father->dod}}">{{ userPhoto($user->father->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                        @else
                        <a href="{{route('users.tree',[$user->father->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->father->name}}" data-content="Date of Birth:{{$user->father->father->father->dob}}">{{ userPhoto($user->father->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                        @endif
                                                <ul>
        
                        <li>
                            @if ($user->father->father->dod)
                            <a href="{{route('users.tree',[$user->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->name}}" data-content="Date of Birth:{{$user->father->father->dob}},Date of Death:{{$user->father->father->dod}}">{{ userPhoto($user->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                            @else
                            <a href="{{route('users.tree',[$user->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->name}}" data-content="Date of Birth:{{$user->father->father->dob}}">{{ userPhoto($user->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                            @endif
                                                        <ul>
            
                            <li>
                                @if ($user->father->dod)
                                <a href="{{route('users.tree',[$user->father->id])}}" data-toggle="popover" title="{{$user->father->name}}" data-content="Date of Birth:{{$user->father->dob}},Date of Death:{{$user->father->dod}}">{{ userPhoto($user->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                                @else
                                <a href="{{route('users.tree',[$user->father->id])}}" data-toggle="popover" title="{{$user->father->name}}" data-content="Date of Birth:{{$user->father->dob}}">{{ userPhoto($user->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                                @endif
                                                                <ul>
                
                                <li>
                                    @if ($user->dod)
                                    <a href="{{route('users.tree',[$user->id])}}" data-toggle="popover" title="{{$user->name}}" data-content="Date of Birth:{{$user->dob}},Date of Death:{{$user->dod}}">{{ userPhoto($user, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                                    @else
                                    <a href="{{route('users.tree',[$user->id])}}" data-toggle="popover" title="{{$user->name}}" data-content="Date of Birth:{{$user->dob}}">{{ userPhoto($user, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                                    @endif
                            
                                @if ($user->childs->count())
                                <ul>
                                    @foreach($user->childs as $child)
                                    <li>
                                        @if ($child->dod)
                                        <a href="{{route('users.tree',[$child->id])}}" data-toggle="popover" title="{{$child->name}}" data-content="Date of Birth:{{$child->dob}},Date of Death:{{$child->dod}}">{{ userPhoto($child, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                                        @else
                                        <a href="{{route('users.tree',[$child->id])}}" data-toggle="popover" title="{{$child->name}}" data-content="Date of Birth:{{$child->dob}}">{{ userPhoto($child, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                                        @endif            
                                        @if ($child->childs->count())
                                        <ul>
                                            @foreach($child->childs as $grand)
                                            <li>
                                                @if ($grand->dod)
                                                <a href="{{route('users.tree',[$grand->id])}}" data-toggle="popover" title="{{$grand->name}}" data-content="Date of Birth:{{$grand->dob}},Date of Death:{{$grand->dod}}">{{ userPhoto($grand, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                                                @else
                                                <a href="{{route('users.tree',[$grand->id])}}" data-toggle="popover" title="{{$grand->name}}" data-content="Date of Birth:{{$grand->dob}}">{{ userPhoto($grand, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                                                @endif
                                                            @if ($grand->childs->count())
                                                <ul>
                                                    @foreach($grand->childs as $gg)
                                                    <li>
                                                        @if ($gg->dod)
                                                        <a href="{{route('users.tree',[$gg->id])}}" data-toggle="popover" title="{{$gg->name}}" data-content="Date of Birth:{{$gg->dob}},Date of Death:{{$gg->dod}}">{{ userPhoto($gg, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                                                        @else
                                                        <a href="{{route('users.tree',[$gg->id])}}" data-toggle="popover" title="{{$gg->name}}" data-content="Date of Birth:{{$gg->dob}}">{{ userPhoto($gg, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                                                        @endif                           
                                                        @if ($gg->childs->count())
                                                        <ul>
                                                            @foreach($gg->childs as $ggc)
                                                            <li>
                                                                @if ($ggc->dod)
                                                                <a href="{{route('users.tree',[$ggc->id])}}" data-toggle="popover" title="{{$ggc->name}}" data-content="Date of Birth:{{$ggc->dob}},Date of Death:{{$ggc->dod}}">{{ userPhoto($ggc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                                                                @else
                                                                <a href="{{route('users.tree',[$ggc->id])}}" data-toggle="popover" title="{{$ggc->name}}" data-content="Date of Birth:{{$ggc->dob}}">{{ userPhoto($ggc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                                                                @endif 
                                                                   @if ($ggc->childs->count())
                                                             <ul>
                                                            @foreach($ggc->childs as $ggcc)
                                                            <li>
                                                                @if ($ggcc->dod)
                                                                <a href="{{route('users.tree',[$ggcc->id])}}" data-toggle="popover" title="{{$ggcc->name}}" data-content="Date of Birth:{{$ggcc->dob}},Date of Death:{{$ggcc->dod}}">{{ userPhoto($ggcc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                                                                @else
                                                                <a href="{{route('users.tree',[$ggcc->id])}}" data-toggle="popover" title="{{$ggcc->name}}" data-content="Date of Birth:{{$ggcc->dob}}">{{ userPhoto($ggcc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
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
                                    @endforeach
                                </ul>
            @endif
        </li>
                                </ul>
                            </li>
                            </ul>
                        </li>
                        </ul>
                    </li>
                    </ul>
                </li>
                </ul>

   
    @else

    @if (isset($user->father->father->father->father))
    @if ($user->father->father->father->father->dod)
    <a href="{{route('users.tree',[$user->father->father->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->father->father->name}}" data-content="Date of Birth:{{$user->father->father->father->father->dob}},Date of Death:{{$user->father->father->father->father->dod}}">{{ userPhoto($user->father->father->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
    @else
    <a href="{{route('users.tree',[$user->father->father->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->father->father->name}}" data-content="Date of Birth:{{$user->father->father->father->father->dob}}">{{ userPhoto($user->father->father->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
    @endif
        <ul>

    <li>
        @if ($user->father->father->father->dod)
        <a href="{{route('users.tree',[$user->father->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->father->name}}" data-content="Date of Birth:{{$user->father->father->father->dob}},Date of Death:{{$user->father->father->father->dod}}">{{ userPhoto($user->father->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
        @else
        <a href="{{route('users.tree',[$user->father->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->father->name}}" data-content="Date of Birth:{{$user->father->father->father->dob}}">{{ userPhoto($user->father->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
        @endif
                <ul>

        <li>
            @if ($user->father->father->dod)
            <a href="{{route('users.tree',[$user->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->name}}" data-content="Date of Birth:{{$user->father->father->dob}},Date of Death:{{$user->father->father->dod}}">{{ userPhoto($user->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
            @else
            <a href="{{route('users.tree',[$user->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->name}}" data-content="Date of Birth:{{$user->father->father->dob}}">{{ userPhoto($user->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
            @endif
                        <ul>

            <li>
                @if ($user->father->dod)
                <a href="{{route('users.tree',[$user->father->id])}}" data-toggle="popover" title="{{$user->father->name}}" data-content="Date of Birth:{{$user->father->dob}},Date of Death:{{$user->father->dod}}">{{ userPhoto($user->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                @else
                <a href="{{route('users.tree',[$user->father->id])}}" data-toggle="popover" title="{{$user->father->name}}" data-content="Date of Birth:{{$user->father->dob}}">{{ userPhoto($user->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                @endif 
                                <ul>

                <li>
                    
                    
                    @if ($user->dod)
                    <a href="{{route('users.tree',[$user->id])}}" data-toggle="popover" title="{{$user->name}}" data-content="Date of Birth:{{$user->dob}},Date of Death:{{$user->dod}}">{{ userPhoto($user, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                    @else
                    <a href="{{route('users.tree',[$user->id])}}" data-toggle="popover" title="{{$user->name}}" data-content="Date of Birth:{{$user->dob}}">{{ userPhoto($user, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                    @endif
                    @if ($user->childs->count())
        <ul>
        @foreach($user->childs as $child)
        <li>
            @if ($child->dod)
            <a href="{{route('users.tree',[$child->id])}}" data-toggle="popover" title="{{$child->name}}" data-content="Date of Birth:{{$child->dob}},Date of Death:{{$child->dod}}">{{ userPhoto($child, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
            @else
            <a href="{{route('users.tree',[$child->id])}}" data-toggle="popover" title="{{$child->name}}" data-content="Date of Birth:{{$child->dob}}">{{ userPhoto($child, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
            @endif
            @if ($child->childs->count())
        <ul>
            @foreach($child->childs as $grand)
            <li>
                @if ($grand->dod)
                <a href="{{route('users.tree',[$grand->id])}}" data-toggle="popover" title="{{$grand->name}}" data-content="Date of Birth:{{$grand->dob}},Date of Death:{{$grand->dod}}">{{ userPhoto($grand, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                @else
                <a href="{{route('users.tree',[$grand->id])}}" data-toggle="popover" title="{{$grand->name}}" data-content="Date of Birth:{{$grand->dob}}">{{ userPhoto($grand, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                @endif
                        @if ($grand->childs->count())
                <ul>
                    @foreach($grand->childs as $gg)
                    <li>
                        @if ($gg->dod)
                        <a href="{{route('users.tree',[$gg->id])}}" data-toggle="popover" title="{{$gg->name}}" data-content="Date of Birth:{{$gg->dob}},Date of Death:{{$gg->dod}}">{{ userPhoto($gg, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                        @else
                        <a href="{{route('users.tree',[$gg->id])}}" data-toggle="popover" title="{{$gg->name}}" data-content="Date of Birth:{{$gg->dob}}">{{ userPhoto($gg, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                        @endif                  
                        @if ($gg->childs->count())
                        <ul>
                            @foreach($gg->childs as $ggc)
                            <li>
                                @if ($ggc->dod)
                                <a href="{{route('users.tree',[$ggc->id])}}" data-toggle="popover" title="{{$ggc->name}}" data-content="Date of Birth:{{$ggc->dob}},Date of Death:{{$ggc->dod}}">{{ userPhoto($ggc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                                @else
                                <a href="{{route('users.tree',[$ggc->id])}}" data-toggle="popover" title="{{$ggc->name}}" data-content="Date of Birth:{{$ggc->dob}}">{{ userPhoto($ggc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                                @endif
                                    @if ($ggc->childs->count())
                             <ul>
                            @foreach($ggc->childs as $ggcc)
                            <li>
                                @if ($ggcc->dod)
                                <a href="{{route('users.tree',[$ggcc->id])}}" data-toggle="popover" title="{{$ggcc->name}}" data-content="Date of Birth:{{$ggcc->dob}},Date of Death:{{$ggcc->dod}}">{{ userPhoto($ggcc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                                @else
                                <a href="{{route('users.tree',[$ggcc->id])}}" data-toggle="popover" title="{{$ggcc->name}}" data-content="Date of Birth:{{$ggcc->dob}}">{{ userPhoto($ggcc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
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
        @endforeach
        </ul>
@endif
</li>
                </ul>
            </li>
            </ul>
        </li>
        </ul>
    </li>
    </ul>



@else

@if (isset($user->father->father->father))

@if ($user->father->father->father->dod)
<a href="{{route('users.tree',[$user->father->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->father->name}}" data-content="Date of Birth:{{$user->father->father->father->dob}},Date of Death:{{$user->father->father->father->dod}}">{{ userPhoto($user->father->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
@else
<a href="{{route('users.tree',[$user->father->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->father->name}}" data-content="Date of Birth:{{$user->father->father->father->dob}}">{{ userPhoto($user->father->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
@endif
    <ul>

    <li>
        @if ($user->father->father->dod)
        <a href="{{route('users.tree',[$user->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->name}}" data-content="Date of Birth:{{$user->father->father->dob}},Date of Death:{{$user->father->father->dod}}">{{ userPhoto($user->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
        @else
        <a href="{{route('users.tree',[$user->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->name}}" data-content="Date of Birth:{{$user->father->father->dob}}">{{ userPhoto($user->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
        @endif
                <ul>

        <li>
            @if ($user->father->dod)
            <a href="{{route('users.tree',[$user->father->id])}}" data-toggle="popover" title="{{$user->father->name}}" data-content="Date of Birth:{{$user->father->dob}},Date of Death:{{$user->father->dod}}">{{ userPhoto($user->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
            @else
            <a href="{{route('users.tree',[$user->father->id])}}" data-toggle="popover" title="{{$user->father->name}}" data-content="Date of Birth:{{$user->father->dob}}">{{ userPhoto($user->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
            @endif  
                        <ul>

            <li>
                @if ($user->dod)
                <a href="{{route('users.tree',[$user->id])}}" data-toggle="popover" title="{{$user->name}}" data-content="Date of Birth:{{$user->dob}},Date of Death:{{$user->dod}}">{{ userPhoto($user, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                @else
                <a href="{{route('users.tree',[$user->id])}}" data-toggle="popover" title="{{$user->name}}" data-content="Date of Birth:{{$user->dob}}">{{ userPhoto($user, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                @endif
                @if ($user->childs->count())
    <ul>
    @foreach($user->childs as $child)
    <li>
        @if ($child->dod)
        <a href="{{route('users.tree',[$child->id])}}" data-toggle="popover" title="{{$child->name}}" data-content="Date of Birth:{{$child->dob}},Date of Death:{{$child->dod}}">{{ userPhoto($child, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
        @else
        <a href="{{route('users.tree',[$child->id])}}" data-toggle="popover" title="{{$child->name}}" data-content="Date of Birth:{{$child->dob}}">{{ userPhoto($child, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
        @endif
        @if ($child->childs->count())
    <ul>
        @foreach($child->childs as $grand)
        <li>
            @if ($grand->dod)
            <a href="{{route('users.tree',[$grand->id])}}" data-toggle="popover" title="{{$grand->name}}" data-content="Date of Birth:{{$grand->dob}},Date of Death:{{$grand->dod}}">{{ userPhoto($grand, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
            @else
            <a href="{{route('users.tree',[$grand->id])}}" data-toggle="popover" title="{{$grand->name}}" data-content="Date of Birth:{{$grand->dob}}">{{ userPhoto($grand, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
            @endif
                    @if ($grand->childs->count())
            <ul>
                @foreach($grand->childs as $gg)
                <li>
                    @if ($gg->dod)
                    <a href="{{route('users.tree',[$gg->id])}}" data-toggle="popover" title="{{$gg->name}}" data-content="Date of Birth:{{$gg->dob}},Date of Death:{{$gg->dod}}">{{ userPhoto($gg, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                    @else
                    <a href="{{route('users.tree',[$gg->id])}}" data-toggle="popover" title="{{$gg->name}}" data-content="Date of Birth:{{$gg->dob}}">{{ userPhoto($gg, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                    @endif                  
                    @if ($gg->childs->count())
                    <ul>
                        @foreach($gg->childs as $ggc)
                        <li>
                            @if ($ggc->dod)
                            <a href="{{route('users.tree',[$ggc->id])}}" data-toggle="popover" title="{{$ggc->name}}" data-content="Date of Birth:{{$ggc->dob}},Date of Death:{{$ggc->dod}}">{{ userPhoto($ggc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                            @else
                            <a href="{{route('users.tree',[$ggc->id])}}" data-toggle="popover" title="{{$ggc->name}}" data-content="Date of Birth:{{$ggc->dob}}">{{ userPhoto($ggc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                            @endif
                                @if ($ggc->childs->count())
                         <ul>
                        @foreach($ggc->childs as $ggcc)
                        <li>
                            @if ($ggcc->dod)
                            <a href="{{route('users.tree',[$ggcc->id])}}" data-toggle="popover" title="{{$ggcc->name}}" data-content="Date of Birth:{{$ggcc->dob}},Date of Death:{{$ggcc->dod}}">{{ userPhoto($ggcc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                            @else
                            <a href="{{route('users.tree',[$ggcc->id])}}" data-toggle="popover" title="{{$ggcc->name}}" data-content="Date of Birth:{{$ggcc->dob}}">{{ userPhoto($ggcc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
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
    @endforeach
    </ul>
@endif
</li>
            </ul>
        </li>
        </ul>
    </li>
    </ul>




@else

@if (isset($user->father->father))
           @if ($user->father->father->dod)
            <a href="{{route('users.tree',[$user->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->name}}" data-content="Date of Birth:{{$user->father->father->dob}},Date of Death:{{$user->father->father->dod}}">{{ userPhoto($user->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
            @else
            <a href="{{route('users.tree',[$user->father->father->id])}}" data-toggle="popover" title="{{$user->father->father->name}}" data-content="Date of Birth:{{$user->father->father->dob}}">{{ userPhoto($user->father->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
            @endif  
                    <ul>

        <li>
            @if ($user->father->dod)
            <a href="{{route('users.tree',[$user->father->id])}}" data-toggle="popover" title="{{$user->father->name}}" data-content="Date of Birth:{{$user->father->dob}},Date of Death:{{$user->father->dod}}">{{ userPhoto($user->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
            @else
            <a href="{{route('users.tree',[$user->father->id])}}" data-toggle="popover" title="{{$user->father->name}}" data-content="Date of Birth:{{$user->father->dob}}">{{ userPhoto($user->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
            @endif              
             <ul>

            <li>
        @if ($user->dod)
        <a href="{{route('users.tree',[$user->id])}}" data-toggle="popover" title="{{$user->name}}" data-content="Date of Birth:{{$user->dob}},Date of Death:{{$user->dod}}">{{ userPhoto($user, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
        @else
        <a href="{{route('users.tree',[$user->id])}}" data-toggle="popover" title="{{$user->name}}" data-content="Date of Birth:{{$user->dob}}">{{ userPhoto($user, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
        @endif

    @if ($user->childs->count())
    <ul>
        @foreach($user->childs as $child)
        <li>
            @if ($child->dod)
            <a href="{{route('users.tree',[$child->id])}}" data-toggle="popover" title="{{$child->name}}" data-content="Date of Birth:{{$child->dob}},Date of Death:{{$child->dod}}">{{ userPhoto($child, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
            @else
            <a href="{{route('users.tree',[$child->id])}}" data-toggle="popover" title="{{$child->name}}" data-content="Date of Birth:{{$child->dob}}">{{ userPhoto($child, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
            @endif            
            @if ($child->childs->count())
            <ul>
                @foreach($child->childs as $grand)
                <li>
                    @if ($grand->dod)
                    <a href="{{route('users.tree',[$grand->id])}}" data-toggle="popover" title="{{$grand->name}}" data-content="Date of Birth:{{$grand->dob}},Date of Death:{{$grand->dod}}">{{ userPhoto($grand, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                    @else
                    <a href="{{route('users.tree',[$grand->id])}}" data-toggle="popover" title="{{$grand->name}}" data-content="Date of Birth:{{$grand->dob}}">{{ userPhoto($grand, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                    @endif
                                @if ($grand->childs->count())
                    <ul>
                        @foreach($grand->childs as $gg)
                        <li>
                            @if ($gg->dod)
                            <a href="{{route('users.tree',[$gg->id])}}" data-toggle="popover" title="{{$gg->name}}" data-content="Date of Birth:{{$gg->dob}},Date of Death:{{$gg->dod}}">{{ userPhoto($gg, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                            @else
                            <a href="{{route('users.tree',[$gg->id])}}" data-toggle="popover" title="{{$gg->name}}" data-content="Date of Birth:{{$gg->dob}}">{{ userPhoto($gg, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                            @endif                           
                            @if ($gg->childs->count())
                            <ul>
                                @foreach($gg->childs as $ggc)
                                <li>
                                    @if ($ggc->dod)
                                    <a href="{{route('users.tree',[$ggc->id])}}" data-toggle="popover" title="{{$ggc->name}}" data-content="Date of Birth:{{$ggc->dob}},Date of Death:{{$ggc->dod}}">{{ userPhoto($ggc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                                    @else
                                    <a href="{{route('users.tree',[$ggc->id])}}" data-toggle="popover" title="{{$ggc->name}}" data-content="Date of Birth:{{$ggc->dob}}">{{ userPhoto($ggc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                                    @endif 
                                       @if ($ggc->childs->count())
                                 <ul>
                                @foreach($ggc->childs as $ggcc)
                                <li>
                                    @if ($ggcc->dod)
                                    <a href="{{route('users.tree',[$ggcc->id])}}" data-toggle="popover" title="{{$ggcc->name}}" data-content="Date of Birth:{{$ggcc->dob}},Date of Death:{{$ggcc->dod}}">{{ userPhoto($ggcc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                                    @else
                                    <a href="{{route('users.tree',[$ggcc->id])}}" data-toggle="popover" title="{{$ggcc->name}}" data-content="Date of Birth:{{$ggcc->dob}}">{{ userPhoto($ggcc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
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
        @endforeach
    </ul>
@endif
</li>
            </ul>
        </li>
        </ul>
    




@else

@if (isset($user->father))
       @if ($user->father->dod)
        <a href="{{route('users.tree',[$user->father->id])}}" data-toggle="popover" title="{{$user->father->name}}" data-content="Date of Birth:{{$user->father->dob}},Date of Death:{{$user->father->dod}}">{{ userPhoto($user->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
        @else
        <a href="{{route('users.tree',[$user->father->id])}}" data-toggle="popover" title="{{$user->father->name}}" data-content="Date of Birth:{{$user->father->dob}}">{{ userPhoto($user->father, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
        @endif            
        <ul>

        <li>
            @if ($user->dod)
            <a href="{{route('users.tree',[$user->id])}}" data-toggle="popover" title="{{$user->name}}" data-content="Date of Birth:{{$user->dob}},Date of Death:{{$user->dod}}">{{ userPhoto($user, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
            @else
            <a href="{{route('users.tree',[$user->id])}}" data-toggle="popover" title="{{$user->name}}" data-content="Date of Birth:{{$user->dob}}">{{ userPhoto($user, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
            @endif
            @if ($user->childs->count())
<ul>
@foreach($user->childs as $child)
<li>
    @if ($child->dod)
    <a href="{{route('users.tree',[$child->id])}}" data-toggle="popover" title="{{$child->name}}" data-content="Date of Birth:{{$child->dob}},Date of Death:{{$child->dod}}">{{ userPhoto($child, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
    @else
    <a href="{{route('users.tree',[$child->id])}}" data-toggle="popover" title="{{$child->name}}" data-content="Date of Birth:{{$child->dob}}">{{ userPhoto($child, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
    @endif
    @if ($child->childs->count())
<ul>
    @foreach($child->childs as $grand)
    <li>
        @if ($grand->dod)
        <a href="{{route('users.tree',[$grand->id])}}" data-toggle="popover" title="{{$grand->name}}" data-content="Date of Birth:{{$grand->dob}},Date of Death:{{$grand->dod}}">{{ userPhoto($grand, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
        @else
        <a href="{{route('users.tree',[$grand->id])}}" data-toggle="popover" title="{{$grand->name}}" data-content="Date of Birth:{{$grand->dob}}">{{ userPhoto($grand, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
        @endif
                @if ($grand->childs->count())
        <ul>
            @foreach($grand->childs as $gg)
            <li>
                @if ($gg->dod)
                <a href="{{route('users.tree',[$gg->id])}}" data-toggle="popover" title="{{$gg->name}}" data-content="Date of Birth:{{$gg->dob}},Date of Death:{{$gg->dod}}">{{ userPhoto($gg, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                @else
                <a href="{{route('users.tree',[$gg->id])}}" data-toggle="popover" title="{{$gg->name}}" data-content="Date of Birth:{{$gg->dob}}">{{ userPhoto($gg, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                @endif                  
                @if ($gg->childs->count())
                <ul>
                    @foreach($gg->childs as $ggc)
                    <li>
                        @if ($ggc->dod)
                        <a href="{{route('users.tree',[$ggc->id])}}" data-toggle="popover" title="{{$ggc->name}}" data-content="Date of Birth:{{$ggc->dob}},Date of Death:{{$ggc->dod}}">{{ userPhoto($ggc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                        @else
                        <a href="{{route('users.tree',[$ggc->id])}}" data-toggle="popover" title="{{$ggc->name}}" data-content="Date of Birth:{{$ggc->dob}}">{{ userPhoto($ggc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                        @endif
                            @if ($ggc->childs->count())
                     <ul>
                    @foreach($ggc->childs as $ggcc)
                    <li>
                        @if ($ggcc->dod)
                        <a href="{{route('users.tree',[$ggcc->id])}}" data-toggle="popover" title="{{$ggcc->name}}" data-content="Date of Birth:{{$ggcc->dob}},Date of Death:{{$ggcc->dod}}">{{ userPhoto($ggcc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                        @else
                        <a href="{{route('users.tree',[$ggcc->id])}}" data-toggle="popover" title="{{$ggcc->name}}" data-content="Date of Birth:{{$ggcc->dob}}">{{ userPhoto($ggcc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
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
@endforeach
</ul>
@endif
</li>
    </ul>
      
    




@else
        @if ($user->dod)
        <a href="{{route('users.tree',[$user->id])}}" data-toggle="popover" title="{{$user->name}}" data-content="Date of Birth:{{$user->dob}},Date of Death:{{$user->dod}}">{{ userPhoto($user, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
        @else
        <a href="{{route('users.tree',[$user->id])}}" data-toggle="popover" title="{{$user->name}}" data-content="Date of Birth:{{$user->dob}}">{{ userPhoto($user, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
        @endif

    @if ($user->childs->count())
    <ul>
        @foreach($user->childs as $child)
        <li>
            @if ($child->dod)
            <a href="{{route('users.tree',[$child->id])}}" data-toggle="popover" title="{{$child->name}}" data-content="Date of Birth:{{$child->dob}},Date of Death:{{$child->dod}}">{{ userPhoto($child, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
            @else
            <a href="{{route('users.tree',[$child->id])}}" data-toggle="popover" title="{{$child->name}}" data-content="Date of Birth:{{$child->dob}}">{{ userPhoto($child, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
            @endif            
            @if ($child->childs->count())
            <ul>
                @foreach($child->childs as $grand)
                <li>
                    @if ($grand->dod)
                    <a href="{{route('users.tree',[$grand->id])}}" data-toggle="popover" title="{{$grand->name}}" data-content="Date of Birth:{{$grand->dob}},Date of Death:{{$grand->dod}}">{{ userPhoto($grand, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                    @else
                    <a href="{{route('users.tree',[$grand->id])}}" data-toggle="popover" title="{{$grand->name}}" data-content="Date of Birth:{{$grand->dob}}">{{ userPhoto($grand, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                    @endif
                                @if ($grand->childs->count())
                    <ul>
                        @foreach($grand->childs as $gg)
                        <li>
                            @if ($gg->dod)
                            <a href="{{route('users.tree',[$gg->id])}}" data-toggle="popover" title="{{$gg->name}}" data-content="Date of Birth:{{$gg->dob}},Date of Death:{{$gg->dod}}">{{ userPhoto($gg, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                            @else
                            <a href="{{route('users.tree',[$gg->id])}}" data-toggle="popover" title="{{$gg->name}}" data-content="Date of Birth:{{$gg->dob}}">{{ userPhoto($gg, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                            @endif                           
                            @if ($gg->childs->count())
                            <ul>
                                @foreach($gg->childs as $ggc)
                                <li>
                                    @if ($ggc->dod)
                                    <a href="{{route('users.tree',[$ggc->id])}}" data-toggle="popover" title="{{$ggc->name}}" data-content="Date of Birth:{{$ggc->dob}},Date of Death:{{$ggc->dod}}">{{ userPhoto($ggc, ['style' => 'width:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                                    @else
                                    <a href="{{route('users.tree',[$ggc->id])}}" data-toggle="popover" title="{{$ggc->name}}" data-content="Date of Birth:{{$ggc->dob}}">{{ userPhoto($ggc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
                                    @endif 
                                       @if ($ggc->childs->count())
                                 <ul>
                                @foreach($ggc->childs as $ggcc)
                                <li>
                                    @if ($ggcc->dod)
                                    <a href="{{route('users.tree',[$ggcc->id])}}" data-toggle="popover" title="{{$ggcc->name}}" data-content="Date of Birth:{{$ggcc->dob}},Date of Death:{{$ggcc->dod}}">{{ userPhoto($ggcc, ['style' => 'width:100px;max-width:100px;border-radius: 50%;border: 3px solid #f35a5a;']) }}</a> 
                                    @else
                                    <a href="{{route('users.tree',[$ggcc->id])}}" data-toggle="popover" title="{{$ggcc->name}}" data-content="Date of Birth:{{$ggcc->dob}}">{{ userPhoto($ggcc, ['style' => 'width:100px;height:100px;max-width:100px;border-radius: 50%;border: 3px solid #4fab4f;']) }}</a> 
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
        @endforeach
    </ul>
    @endif
    @endif
    @endif
    @endif
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
@section ('script')
<script>
    $(document).ready(function() {
   $('[data-toggle="popover"]').popover({
      placement: 'top',
      trigger: 'hover'
   });
});
</script>
@endsection
