<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <title>DB Solutions - Sistema de Tarefas</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/DB Solutions.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="margin:0; font-family:Arial, sans-serif; background:#f3f4f6;">

    <!-- Header -->
    <header style="
        background:white;
        padding:20px 60px;
        display:flex;
        justify-content:space-between;
        align-items:center;
        box-shadow:0 2px 10px rgba(0,0,0,0.06);">

        <!-- Logo -->
        <div style="display:flex; align-items:center; gap:12px;">

            <img
                src="{{ asset('images/DB Solutions.png') }}"
                style="height:45px;"
                alt="DB Solutions"
            >

            <strong style="
                font-size:22px;
                color:#0f172a;
            ">
                DB Solutions
            </strong>

        </div>

        <!-- Menu -->
        <div style="display:flex; gap:12px; align-items:center;">

            <a
                href="{{ route('login') }}"
                style="
                background:#0f172a;
                color:white;
                padding:10px 18px;
                border-radius:8px;
                font-weight:700;
                text-decoration:none;
                transition:0.3s;">

                Login
            </a>

            <a
                href="{{ route('register') }}"
                style="
                background:#2563eb;
                color:white;
                padding:10px 18px;
                border-radius:8px;
                font-weight:700;
                text-decoration:none;
                transition:0.3s;">
                Cadastro
            </a>

        </div>

    </header>

    <!-- Main -->
    <main style="
        min-height:calc(100vh - 90px);
        display:flex;
        align-items:center;
        justify-content:center;
        padding:40px 20px;
    ">

        <section style="
            max-width:1100px;
            width:100%;
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:40px;
            align-items:center;
        ">

            <!-- Texto -->
            <div>

                <h1 style="
                    font-size:48px;
                    line-height:1.1;
                    color:#0f172a;
                    margin-bottom:20px;
                ">
                    Sistema de Tarefas com Laravel + API
                </h1>

                <p style="
                    font-size:20px;
                    color:#475569;
                    margin-bottom:30px;
                ">
                    Organize tarefas, acompanhe status e gerencie atividades com autenticação, banco de dados e consumo de API.
                </p>

                <!-- Botões -->
                <div style="
                    display:flex;
                    gap:15px;
                    flex-wrap:wrap;
                ">

                    <a
                        href="{{ route('register') }}"
                        style="
                            background:#2563eb;
                            color:white;
                            padding:14px 24px;
                            border-radius:10px;
                            font-weight:700;
                            text-decoration:none;
                        "
                    >
                        Começar agora
                    </a>

                    <a
                        href="{{ route('login') }}"
                        style="
                            background:#0f172a;
                            color:white;
                            padding:14px 24px;
                            border-radius:10px;
                            font-weight:700;
                            text-decoration:none;
                        "
                    >
                        Entrar
                    </a>

                </div>

            </div>

            <!-- Card -->
            <div style="
                background:white;
                border-radius:24px;
                padding:50px;
                box-shadow:0 20px 40px rgba(0,0,0,0.10);
                text-align:center;
            ">

                <img
                    src="{{ asset('images/DB Solutions.png') }}"
                    style="
                        max-width:300px;
                        width:100%;
                        margin:auto;
                    "
                    alt="DB Solutions"
                >

                <div style="
                    margin-top:30px;
                    text-align:left;
                ">

                    <h2 style="
                        color:#0f172a;
                        margin-bottom:20px;
                    ">
                        Nesse projeto você encontrará:
                    </h2>

                    <p>✅ Login e cadastro de usuários</p>
                    <p>✅ CRUD completo de tarefas</p>
                    <p>✅ API REST com Laravel</p>
                    <p>✅ Frontend consumindo API</p>
                    <p>✅ Separação por usuário</p>

                </div>

            </div>

        </section>

    </main>

</body>

</html>