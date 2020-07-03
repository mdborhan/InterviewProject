<div id="sidebar-main" class="sidebar sidebar-default">
    <div class="sidebar-content">
        <ul class="navigation">
            <li>
                {{--                        {{ route('admin.dashboard') }}--}}
                <a href="{{route('home')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
            </li>
            <li>
                {{--                        {{ route('admin.dashboard') }}--}}
                <a href="{{route('postOrvideo')}}"><i class="fa fa-home"></i> <span>Create Post Or Video</span></a>
            </li>
{{--            <li>--}}
{{--                --}}{{--                        {{ route('admin.dashboard') }}--}}
{{--                <a href="{{route('employee')}}"><i class="fa fa-home"></i> <span>Employee</span></a>--}}
{{--            </li>--}}

{{--            <li>--}}
{{--                <a href="javascript:void(0);"><i class="fa fa-th"></i><span>Attendance</span></a>--}}
{{--                <ul @if(request()->path()== 'mark/attendance') style="display: block;"--}}
{{--                    @elseif(request()->path()=='view/attendance') style="display: block;"--}}
{{--                    @endif>--}}
{{--                    <li>--}}
{{--                        <a class="@if(request()->path()=='mark/attendance') btn-success @endif" href="{{route('mark.attendance')}}">Mark Attendance</a>--}}
{{--                        <a class="@if(request()->path()=='view/attendance') btn-success @endif" href="{{route('view.attendance')}}">View Attendance</a>--}}

{{--                    </li>--}}
{{--                </ul>--}}

{{--            </li>--}}

        </ul>
    </div>
</div>
