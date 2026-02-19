<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'AttendEase') }} — Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body style="margin:0; background: #0f172a;">

    <div x-data="{ sidebarOpen: true, sidebarCollapsed: false, logoutModalOpen: false }"
         class="app-layout">

        <!-- Sidebar -->
        @include('components.partials.sidebar')

        <!-- Main Wrapper -->
        <div class="main-wrapper" :class="sidebarCollapsed ? 'main-expanded' : 'main-normal'">

            <!-- Header -->
            @include('components.partials.header')


        </div>

        <!-- Logout Confirmation Modal -->
        <div x-show="logoutModalOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="modal-overlay"
             style="display: none;">
            <div class="modal-box" @click.stop>
                <div class="modal-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                        <polyline points="16 17 21 12 16 7"/>
                        <line x1="21" y1="12" x2="9" y2="12"/>
                    </svg>
                </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

    @livewireScripts

    <style>
        :root {
            --primary: #2563eb;
            --bg-dark: #0f172a;
            --bg-card: #1e293b;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --border: #334155;
            --sidebar-width: 280px;
            --sidebar-collapsed-width: 80px;
            --header-height: 73px;
            --font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }

        * { box-sizing: border-box; }

        body {
            font-family: var(--font-family);
            color: var(--text-main);
        }

        .app-layout {
            display: flex;
            min-height: 100vh;
            background: var(--bg-dark);
        }

        /* Main content shifts based on sidebar state */
        .main-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            transition: margin-left 0.3s ease;
            min-width: 0;
        }

        .main-normal {
            margin-left: var(--sidebar-width);
        }

        .main-expanded {
            margin-left: var(--sidebar-collapsed-width);
        }

        .page-content {
            flex: 1;
            overflow-y: auto;
        }

        /* Logout Modal */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(4px);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-box {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 2.5rem;
            max-width: 420px;
            width: 90%;
            text-align: center;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        }

        .modal-icon {
            width: 64px;
            height: 64px;
            background: rgba(239, 68, 68, 0.15);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: #ef4444;
        }

        .modal-icon svg { width: 32px; height: 32px; }

        .modal-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-main);
            margin-bottom: 0.75rem;
        }

        .modal-desc {
            font-size: 0.95rem;
            color: var(--text-muted);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .modal-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .modal-btn {
            padding: 0.75rem 2rem;
            border-radius: 12px;
            border: none;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            font-family: var(--font-family);
            transition: all 0.2s;
        }

        .modal-btn-cancel {
            background: #334155;
            color: var(--text-main);
            border: 1px solid var(--border);
        }

        .modal-btn-cancel:hover { background: #475569; }

        .modal-btn-danger {
            background: #ef4444;
            color: white;
        }

        .modal-btn-danger:hover { background: #dc2626; }

        /* Responsive */
        @media (max-width: 767px) {
            .main-normal,
            .main-expanded {
                margin-left: 0;
            }
        }
    </style>
</body>
</html>