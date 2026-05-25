<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                Minhas Tarefas
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                Gerencie suas atividades com organização e produtividade.
            </p>
        </div>
    </x-slot>

    <div style="min-height:100vh; background:#f1f5f9; padding:40px 20px;">
        <div style="max-width:1100px; margin:0 auto;">

            @if (session('success'))
                <div style="background:#dcfce7; color:#166534; border:1px solid #86efac; padding:16px 20px; border-radius:14px; margin-bottom:24px; font-weight:600;">
                    {{ session('success') }}
                </div>
            @endif

            <div style="display:grid; grid-template-columns:1fr 1.4fr; gap:24px; align-items:start;">

                <!-- Nova tarefa -->
                <div style="background:white; border-radius:22px; padding:28px; box-shadow:0 10px 25px rgba(0,0,0,0.07);">

                    <h3 style="font-size:24px; font-weight:800; color:#0f172a; margin-bottom:8px;">
                        Nova Tarefa
                    </h3>

                    <p style="color:#64748b; margin-bottom:24px;">
                        Cadastre uma nova atividade para acompanhar seu progresso.
                    </p>

                    <form method="POST" action="{{ route('tasks.store') }}">
                        @csrf

                        <div style="margin-bottom:18px;">
                            <label style="display:block; font-weight:700; color:#334155; margin-bottom:8px;">
                                Título
                            </label>

                            <input
                                type="text"
                                name="title"
                                placeholder="Ex: Estudar Laravel"
                                required
                                style="width:100%; border:1px solid #cbd5e1; border-radius:12px; padding:14px 16px;"
                            >
                        </div>

                        <div style="margin-bottom:22px;">
                            <label style="display:block; font-weight:700; color:#334155; margin-bottom:8px;">
                                Descrição
                            </label>

                            <textarea
                                name="description"
                                rows="5"
                                placeholder="Descreva os detalhes da tarefa"
                                style="width:100%; border:1px solid #cbd5e1; border-radius:12px; padding:14px 16px;"
                            ></textarea>
                        </div>

                        <button
                            type="submit"
                            style="background:#2563eb; color:white; width:100%; padding:14px 20px; border-radius:12px; font-weight:800; box-shadow:0 8px 18px rgba(37,99,235,.25);"
                        >
                            + Criar Tarefa
                        </button>
                    </form>
                </div>

                <!-- Lista -->
                <div style="background:white; border-radius:22px; padding:28px; box-shadow:0 10px 25px rgba(0,0,0,0.07);">

                    <div style="display:flex; justify-content:space-between; gap:16px; align-items:center; margin-bottom:24px;">
                        <div>
                            <h3 style="font-size:24px; font-weight:800; color:#0f172a;">
                                Lista de Tarefas
                            </h3>

                            <p style="color:#64748b;">
                                Total: {{ $tasks->count() }} tarefa(s)
                            </p>
                        </div>
                    </div>

                    @forelse ($tasks as $task)
                        <div style="border:1px solid #e2e8f0; border-radius:18px; padding:22px; margin-bottom:18px; background:#f8fafc;">

                            <div style="display:flex; justify-content:space-between; gap:12px; align-items:center; margin-bottom:16px;">
                                <span style="font-size:13px; font-weight:800; padding:6px 12px; border-radius:999px; background:{{ $task->completed ? '#dcfce7' : '#fef3c7' }}; color:{{ $task->completed ? '#166534' : '#92400e' }};">
                                    {{ $task->completed ? 'Concluída' : 'Pendente' }}
                                </span>

                                <small style="color:#64748b;">
                                    Criada em {{ $task->created_at->format('d/m/Y') }}
                                </small>
                            </div>

                            <form method="POST" action="{{ route('tasks.update', $task) }}">
                                @csrf
                                @method('PUT')

                                <div style="margin-bottom:14px;">
                                    <label style="display:block; font-weight:700; color:#334155; margin-bottom:8px;">
                                        Título
                                    </label>

                                    <input
                                        type="text"
                                        name="title"
                                        value="{{ $task->title }}"
                                        style="width:100%; border:1px solid #cbd5e1; border-radius:12px; padding:12px 14px;"
                                    >
                                </div>

                                <div style="margin-bottom:14px;">
                                    <label style="display:block; font-weight:700; color:#334155; margin-bottom:8px;">
                                        Descrição
                                    </label>

                                    <textarea
                                        name="description"
                                        rows="3"
                                        style="width:100%; border:1px solid #cbd5e1; border-radius:12px; padding:12px 14px;"
                                    >{{ $task->description }}</textarea>
                                </div>

                                <label style="display:flex; align-items:center; gap:10px; margin-bottom:18px; color:#334155; font-weight:700;">
                                    <input
                                        type="checkbox"
                                        name="completed"
                                        value="1"
                                        @checked($task->completed)
                                    >
                                    Marcar como concluída
                                </label>

                                <div style="display:flex; gap:12px; flex-wrap:wrap;">
                                    <button
                                        type="submit"
                                        style="background:#f59e0b; color:white; padding:11px 18px; border-radius:10px; font-weight:800;"
                                    >
                                        Atualizar
                                    </button>
                            </form>

                            <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    onclick="return confirm('Deseja realmente excluir esta tarefa?')"
                                    style="background:#dc2626; color:white; padding:11px 18px; border-radius:10px; font-weight:800;"
                                >
                                    Excluir
                                </button>
                            </form>
                                </div>
                        </div>
                    @empty
                        <div style="text-align:center; padding:50px 20px; background:#f8fafc; border-radius:18px; border:1px dashed #cbd5e1;">
                            <h3 style="font-size:22px; font-weight:800; color:#0f172a; margin-bottom:8px;">
                                Nenhuma tarefa cadastrada
                            </h3>

                            <p style="color:#64748b;">
                                Crie sua primeira tarefa usando o formulário ao lado.
                            </p>
                        </div>
                    @endforelse

                </div>

            </div>

        </div>
    </div>
</x-app-layout>