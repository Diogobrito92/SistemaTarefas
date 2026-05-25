<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div style="min-height:100vh; background:#f1f5f9; padding:40px 20px;">
        <div style="max-width:1200px; margin:0 auto;">

            <div style="background:white; border-radius:24px; padding:50px 40px; box-shadow:0 10px 30px rgba(0,0,0,0.08); text-align:center;">

                <img
                    src="{{ asset('images/DB Solutions.png') }}"
                    alt="DB Solutions"
                    style="height:120px; width:auto; object-fit:contain; margin:0 auto 30px auto;"
                >

                <h1 style="font-size:36px; font-weight:800; color:#0f172a; margin-bottom:15px;">
                    Bem-vindo ao Sistema de Tarefas
                </h1>

                <p style="font-size:18px; color:#64748b; max-width:700px; margin:0 auto 35px auto; line-height:1.7;">
                    Gerencie tarefas, acompanhe status e veja na prática um sistema com Laravel, autenticação, banco de dados e API REST.
                </p>

                <div style="display:flex; gap:15px; justify-content:center; flex-wrap:wrap; margin-bottom:50px;">

                    <a href="{{ route('tasks.index') }}"
                       style="background:#2563eb; color:white; padding:14px 28px; border-radius:12px; font-weight:700; text-decoration:none;">
                        Ver Tarefas
                    </a>

                    <a href="{{ route('tasks.api') }}"
                       style="background:#0f172a; color:white; padding:14px 28px; border-radius:12px; font-weight:700; text-decoration:none;">
                        Tarefas API
                    </a>

                </div>

                <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:20px; margin-top:20px;">

                    <div style="background:#eff6ff; padding:25px; border-radius:16px;">
                        <h3 style="font-size:20px; font-weight:700; color:#1e3a8a; margin-bottom:10px;">
                            Gestão de Tarefas
                        </h3>

                        <p style="color:#475569; line-height:1.6;">
                            Crie, edite, conclua e exclua tarefas de forma simples e organizada.
                        </p>
                    </div>

                    <div style="background:#f8fafc; padding:25px; border-radius:16px;">
                        <h3 style="font-size:20px; font-weight:700; color:#0f172a; margin-bottom:10px;">
                            API REST
                        </h3>

                        <p style="color:#475569; line-height:1.6;">
                            O sistema possui endpoints para listar, criar, atualizar e excluir tarefas em formato JSON.
                        </p>
                    </div>

                    <div style="background:#ecfeff; padding:25px; border-radius:16px;">
                        <h3 style="font-size:20px; font-weight:700; color:#155e75; margin-bottom:10px;">
                            Frontend com Fetch
                        </h3>

                        <p style="color:#475569; line-height:1.6;">
                            A página Tarefas API consome dados da API usando JavaScript sem depender apenas de formulários tradicionais.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>