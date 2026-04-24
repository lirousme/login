<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="pt-BR" class="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biblioteca</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-950 text-slate-100">
    <header class="fixed top-0 inset-x-0 z-50 border-b border-white/10 bg-slate-900/95 backdrop-blur-xl">
        <div class="mx-auto flex w-full max-w-5xl items-center justify-between px-6 py-4">
            <h1 class="text-lg font-semibold">Biblioteca</h1>
            <div class="flex items-center gap-4">
                <span class="text-sm text-slate-300">Olá, <?= htmlspecialchars((string) $loggedUser, ENT_QUOTES, 'UTF-8') ?></span>
                <a href="<?= htmlspecialchars($logoutUrl, ENT_QUOTES, 'UTF-8') ?>" class="rounded-lg border border-white/20 px-4 py-2 text-sm font-medium hover:bg-white/10 transition">Sair</a>
            </div>
        </div>
    </header>

    <main class="mx-auto w-full max-w-5xl px-6 pb-10 pt-28">
        <section class="rounded-2xl border border-white/10 bg-slate-900/60 p-6 shadow-lg shadow-black/20">
            <h2 class="text-xl font-semibold">Sua biblioteca</h2>
            <p class="mt-2 text-slate-300">Você entrou com sucesso. Aqui é a view da página "biblioteca".</p>
        </section>
    </main>
</body>
</html>
