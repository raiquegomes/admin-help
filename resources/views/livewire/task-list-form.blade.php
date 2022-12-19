
<div class="col-12 col-lg-9">
    <div class="row">
        <div class="col-12">

            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                <span class="font-medium"><b>Tudo certo!</b></span> {{ session('success') }}
            </div>
            @endif

            <div class="card widget-todo">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                    <h4 class="card-title d-flex">
                        <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Atividades Diárias
                    </h4>
                </div>
                <div class="card-body px-0 py-1">
                    <ul class="widget-todo-list-wrapper" id="widget-todo-list">
                        @if($tasks == true)
                            @foreach($tasks as $task)
                            <li class="widget-todo-item done">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" id="taskbox" class="form-check-input" value="1" wire:click="taskCompleted({{$task->id}})" {{isset($task->completed_at)? 'checked' : ''}}>
                                            <label for="taskbox"></label>
                                        </div>
                                        <span class="widget-todo-title ml-50">@if($task->completed_at == true)<del>{{ $task->title }}</del>@else {{ $task->title }} @endif</span>
                                    </div>
                                    <div class="widget-todo-item-action">
                                        <button type="submit" wire:click="taskEdit({{$task->id}})" data-bs-toggle="modal" data-bs-target="#taskEditModal" class="btn icon btn-info"><i class="bi bi-info-circle"></i></button>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        @else
                        <li class="widget-todo-item">
                            <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                <div class="widget-todo-title-area d-flex align-items-center">
                                    <span class="widget-todo-title ml-50">Nenhuma atividade disponivel no momento!</span>
                                </div>
                            </div>
                        </li>
                        @endif
                        @include('section.to-do-list-task-view-modal')
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>