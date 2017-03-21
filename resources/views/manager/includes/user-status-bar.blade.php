<!-- Sidebar user panel -->
<div class="user-panel">
    <div class="pull-left image">
        <img src="{{ Auth::user()->avatar }}" class="img-circle" alt="Usuário">
    </div>
    <div class="pull-left info">
        <p> {{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
