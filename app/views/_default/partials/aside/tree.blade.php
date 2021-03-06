<?php
$navMain = ($nclass != 'dk') ? true : false;
$section = \Auth::user()->getUserSection() ? : '';?>
<ul class="nav {{$nclass}}" @if($navMain) data-ride="collapse" @endif >
@foreach($menu as $k => $m)
    <?php if(preg_match('/space-line/',$k)): ?>
        <li class="m-t"><span class="font-bold h4 text-navitas m-l">{{$m['title']}}:</span></li>
    <?php else:
        $activeKey = Mapic::getActiveMenuKey($k) ? : false;
        $pub_sec = (isset($m[2]) && $m[2]=='public')?'':$section;
        $url = isset($m['childs']) ? $m[2] : $pub_sec.'/'.$k;
        ?>
        <li class="<?= $k=="logout"?'m-t':''; $activeKey?'active':'';?>">
            <a href="{{{ URL::to($url)}}}" class='auto'>
                @if (isset($m['childs']))
                <span class="pull-right text-muted">
                    <i class="i i-circle-sm-o text"></i>
                    <i class="i i-circle-sm text-active"></i>
                </span>
                @endif
                <i class='{{$m[1]}}'></i>
                <span @if($navMain) class='font-bold' @endif>{{$m[0]}}</span>
            </a>
            @if (isset($m['childs']))
                @include('_default.partials.aside.tree', array('menu'=>$m['childs'], 'nclass'=>'dk'))
            @endif
        </li>
    <?php endif ?>
@endforeach
</ul>
