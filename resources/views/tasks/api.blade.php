<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                Tarefas API
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                Tela consumindo a API REST com JavaScript Fetch.
            </p>
        </div>
    </x-slot>

    <div style="min-height:100vh; background:#f1f5f9; padding:40px 20px;">
        <div style="max-width:1100px; margin:0 auto;">

            <div style="display:grid; grid-template-columns:1fr 1.4fr; gap:24px; align-items:start;">

                <div style="background:white; border-radius:22px; padding:28px; box-shadow:0 10px 25px rgba(0,0,0,0.07);">
                    <h3 style="font-size:24px; font-weight:800; color:#0f172a; margin-bottom:8px;">
                        Criar via API
                    </h3>

                    <p style="color:#64748b; margin-bottom:24px;">
                        Esta tarefa será cadastrada usando uma requisição POST para a API.
                    </p>

                    <input
                        id="title"
                        type="text"
                        placeholder="Título da tarefa"
                        style="width:100%; border:1px solid #cbd5e1; border-radius:12px; padding:14px 16px; margin-bottom:18px;"
                    >

                    <textarea
                        id="description"
                        rows="5"
                        placeholder="Descrição da tarefa"
                        style="width:100%; border:1px solid #cbd5e1; border-radius:12px; padding:14px 16px; margin-bottom:22px;"
                    ></textarea>

                    <button
                        onclick="createTask()"
                        style="background:#2563eb; color:white; width:100%; padding:14px 20px; border-radius:12px; font-weight:800; box-shadow:0 8px 18px rgba(37,99,235,.25);"
                    >
                        + Criar via API
                    </button>
                </div>

                <div style="background:white; border-radius:22px; padding:28px; box-shadow:0 10px 25px rgba(0,0,0,0.07);">
                    <h3 style="font-size:24px; font-weight:800; color:#0f172a; margin-bottom:8px;">
                        Lista carregada pela API
                    </h3>

                    <p style="color:#64748b; margin-bottom:24px;">
                        Dados retornados em JSON e renderizados com JavaScript.
                    </p>

                    <div id="tasks-list">
                        Carregando tarefas...
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
        async function loadTasks() {
            const list = document.getElementById('tasks-list');

            list.innerHTML = `
                <div style="text-align:center; padding:40px; color:#64748b;">
                    Carregando tarefas da API...
                </div>
            `;

            const response = await fetch('/api/tasks', {
                headers: { 'Accept': 'application/json' },
                credentials: 'same-origin'
            });

            if (!response.ok) {
                list.innerHTML = `
                    <div style="background:#fee2e2; color:#991b1b; padding:16px; border-radius:12px; font-weight:700;">
                        Erro ao carregar tarefas pela API.
                    </div>
                `;
                return;
            }

            const tasks = await response.json();

            list.innerHTML = '';

            if (tasks.length === 0) {
                list.innerHTML = `
                    <div style="text-align:center; padding:50px 20px; background:#f8fafc; border-radius:18px; border:1px dashed #cbd5e1;">
                        <h3 style="font-size:22px; font-weight:800; color:#0f172a; margin-bottom:8px;">
                            Nenhuma tarefa encontrada
                        </h3>
                        <p style="color:#64748b;">
                            Crie uma tarefa usando o formulário ao lado.
                        </p>
                    </div>
                `;
                return;
            }

            tasks.forEach(task => {
                const statusBg = task.completed ? '#dcfce7' : '#fef3c7';
                const statusColor = task.completed ? '#166534' : '#92400e';
                const statusText = task.completed ? 'Concluída' : 'Pendente';

                list.innerHTML += `
                    <div style="border:1px solid #e2e8f0; border-radius:18px; padding:22px; margin-bottom:18px; background:#f8fafc;">
                        <div style="display:flex; justify-content:space-between; align-items:center; gap:12px; margin-bottom:16px;">
                            <span style="font-size:13px; font-weight:800; padding:6px 12px; border-radius:999px; background:${statusBg}; color:${statusColor};">
                                ${statusText}
                            </span>

                            <small style="color:#64748b;">
                                ID #${task.id}
                            </small>
                        </div>

                        <input
                            id="title-${task.id}"
                            value="${task.title}"
                            style="width:100%; border:1px solid #cbd5e1; border-radius:12px; padding:12px 14px; margin-bottom:14px;"
                        >

                        <textarea
                            id="description-${task.id}"
                            rows="3"
                            style="width:100%; border:1px solid #cbd5e1; border-radius:12px; padding:12px 14px; margin-bottom:14px;"
                        >${task.description ?? ''}</textarea>

                        <label style="display:flex; align-items:center; gap:10px; margin-bottom:18px; color:#334155; font-weight:700;">
                            <input id="completed-${task.id}" type="checkbox" ${task.completed ? 'checked' : ''}>
                            Marcar como concluída
                        </label>

                        <div style="display:flex; gap:12px; flex-wrap:wrap;">
                            <button
                                onclick="updateTask(${task.id})"
                                style="background:#f59e0b; color:white; padding:11px 18px; border-radius:10px; font-weight:800;"
                            >
                                Atualizar
                            </button>

                            <button
                                onclick="deleteTask(${task.id})"
                                style="background:#dc2626; color:white; padding:11px 18px; border-radius:10px; font-weight:800;"
                            >
                                Excluir
                            </button>
                        </div>
                    </div>
                `;
            });
        }

        async function createTask() {
            const title = document.getElementById('title').value.trim();
            const description = document.getElementById('description').value.trim();

            if (!title) {
                alert('Informe o título da tarefa.');
                return;
            }

            await fetch('/api/tasks', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                credentials: 'same-origin',
                body: JSON.stringify({ title, description })
            });

            document.getElementById('title').value = '';
            document.getElementById('description').value = '';

            loadTasks();
        }

        async function updateTask(id) {
            await fetch(`/api/tasks/${id}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                credentials: 'same-origin',
                body: JSON.stringify({
                    title: document.getElementById(`title-${id}`).value,
                    description: document.getElementById(`description-${id}`).value,
                    completed: document.getElementById(`completed-${id}`).checked
                })
            });

            loadTasks();
        }

        async function deleteTask(id) {
            if (!confirm('Deseja realmente excluir esta tarefa?')) {
                return;
            }

            await fetch(`/api/tasks/${id}`, {
                method: 'DELETE',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                credentials: 'same-origin'
            });

            loadTasks();
        }

        loadTasks();
    </script>
</x-app-layout>