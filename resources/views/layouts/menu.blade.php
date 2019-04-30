




<li class="{{ Request::is('kelas*') ? 'active' : '' }}">
    <a href="{!! route('kelas.index') !!}"><i class="fa fa-edit"></i><span>Kelas</span></a>
</li>


<li class="{{ Request::is('soals*') ? 'active' : '' }}">
    <a href="{!! route('soals.index') !!}"><i class="fa fa-edit"></i><span>Soals</span></a>
</li>

<li class="{{ Request::is('nilais*') ? 'active' : '' }}">
    <a href="{!! route('nilais.index') !!}"><i class="fa fa-edit"></i><span>Nilais</span></a>
</li>

<li class="{{ Request::is('materis*') ? 'active' : '' }}">
    <a href="{!! route('materis.index') !!}"><i class="fa fa-edit"></i><span>Materis</span></a>
</li>

<li class="{{ Request::is('penugasans*') ? 'active' : '' }}">
    <a href="{!! route('penugasans.index') !!}"><i class="fa fa-edit"></i><span>Penugasans</span></a>
</li>

<li class="{{ Request::is('materidetails*') ? 'active' : '' }}">
    <a href="{!! route('materidetails.index') !!}"><i class="fa fa-edit"></i><span>Materidetails</span></a>
</li>

