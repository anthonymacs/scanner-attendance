<!-- Mobile Overlay -->
<div x-show="sidebarOpen" 
     @click="sidebarOpen = false" 
     class="sidebar-overlay" 
     style="display: none;"
     aria-hidden="true">
</div>

<!-- Sidebar -->
<aside x-show="sidebarOpen" 
       x-transition:enter="transition ease-in-out duration-300 transform"
       x-transition:enter-start="-translate-x-full" 
       x-transition:enter-end="translate-x-0"
       x-transition:leave="transition ease-in-out duration-300 transform" 
       x-transition:leave-start="translate-x-0"
       x-transition:leave-end="-translate-x-full" 
       :class="sidebarCollapsed ? 'sidebar-collapsed' : 'sidebar-expanded'"
       class="app-sidebar"
       style="display: none;">

    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <div class="logo-wrapper">
                <img src="{{ asset('images/logo.jpg') }}" 
                     alt="EVSU Logo" 
                     class="logo-image">
            </div>
            <div x-show="!sidebarCollapsed" 
                 x-transition 
                 class="logo-text">
                <span class="logo-title">DocHub</span>
                <span class="logo-subtitle">Document Management</span>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="sidebar-nav">
        
        <!-- Dashboard -->
        <x-partials.sidebar-link href="{{ route('dashboard.index') }}" route="dashboard*" label="Dashboard">
            <x-slot:icon>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="7" height="7"/>
                    <rect x="14" y="3" width="7" height="7"/>
                    <rect x="14" y="14" width="7" height="7"/>
                    <rect x="3" y="14" width="7" height="7"/>
                </svg>
            </x-slot:icon>
        </x-partials.sidebar-link>

        <!-- Users -->
        <x-partials.sidebar-link href="{{ route('users.index') }}" route="users.*" label="Users">
            <x-slot:icon>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 4a4 4 0 110 8 4 4 0 010-8zm-8 16a6 6 0 0116 0" />
                </svg>
            </x-slot:icon>
        </x-partials.sidebar-link>

        <!-- Categories -->
        <x-partials.sidebar-link href="{{ route('categories.index') }}" route="categories.*" label="Categories">
            <x-slot:icon>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M7 3h5l7 7-7 7H7L3 12V7a4 4 0 014-4z" />
                </svg>
            </x-slot:icon>
        </x-partials.sidebar-link>

        <!-- Upload -->
        <x-partials.sidebar-link href="{{ route('uploads.index') }}" route="uploads.*" label="Upload">
            <x-slot:icon>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                    <polyline points="17 8 12 3 7 8"/>
                    <line x1="12" y1="3" x2="12" y2="15"/>
                </svg>
            </x-slot:icon>
        </x-partials.sidebar-link>

        <!-- Documents -->
        <x-partials.sidebar-link href="{{ route('documents.index') }}" route="documents.*" label="Documents">
            <x-slot:icon>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586l5.414 5.414" />
                </svg>
            </x-slot:icon>
        </x-partials.sidebar-link>

        <!-- Divider -->
        <div x-show="!sidebarCollapsed" class="sidebar-divider"></div>

        <!-- Settings (Optional) -->
        <x-partials.sidebar-link href="#" route="settings.*" label="Settings">
            <x-slot:icon>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"/>
                    <path d="M12 1v6m0 6v6M5.64 5.64l4.24 4.24m4.24 4.24l4.24 4.24M1 12h6m6 0h6M5.64 18.36l4.24-4.24m4.24-4.24l4.24-4.24"/>
                </svg>
            </x-slot:icon>
        </x-partials.sidebar-link>

    </nav>

    <!-- Sidebar Footer -->
    <div class="sidebar-footer">
        <button @click="sidebarCollapsed = !sidebarCollapsed" class="collapse-btn">
            <svg x-show="!sidebarCollapsed" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="11 17 6 12 11 7"/>
                <polyline points="18 17 13 12 18 7"/>
            </svg>
            <svg x-show="sidebarCollapsed" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="13 17 18 12 13 7"/>
                <polyline points="6 17 11 12 6 7"/>
            </svg>
            <span x-show="!sidebarCollapsed">Collapse</span>
        </button>
        
        <div x-show="!sidebarCollapsed" x-transition class="footer-info">
            <p class="footer-text">Version 1.0.0</p>
        </div>
    </div>
</aside>

<style>
    /* Design Tokens */
    :root {
        --primary: #2563eb;
        --primary-hover: #1d4ed8;
        --bg-dark: #0f172a;
        --bg-card: #1e293b;
        --text-main: #f8fafc;
        --text-muted: #94a3b8;
        --text-tertiary: #64748b;
        --border: #334155;
        --accent: #60a5fa;
        --sidebar-width: 280px;
        --sidebar-collapsed-width: 80px;
        --font-family: 'Inter', system-ui, -apple-system, sans-serif;
    }

    /* Sidebar Overlay (Mobile) */
    .sidebar-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(4px);
        z-index: 25;
    }

    @media (min-width: 768px) {
        .sidebar-overlay {
            display: none !important;
        }
    }

    /* Sidebar Container */
    .app-sidebar {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        background: var(--bg-card);
        border-right: 1px solid var(--border);
        display: flex;
        flex-direction: column;
        overflow-y: auto;
        overflow-x: hidden;
        transition: width 0.3s ease;
        z-index: 30;
        box-shadow: 2px 0 8px rgba(0, 0, 0, 0.3);
        font-family: var(--font-family);
    }

    .sidebar-expanded {
        width: var(--sidebar-width);
    }

    .sidebar-collapsed {
        width: var(--sidebar-collapsed-width);
    }

    @media (min-width: 768px) {
        .app-sidebar {
            position: static;
            display: flex !important;
        }
    }

    /* Custom Scrollbar */
    .app-sidebar::-webkit-scrollbar {
        width: 6px;
    }

    .app-sidebar::-webkit-scrollbar-track {
        background: transparent;
    }

    .app-sidebar::-webkit-scrollbar-thumb {
        background: var(--border);
        border-radius: 3px;
    }

    .app-sidebar::-webkit-scrollbar-thumb:hover {
        background: var(--text-tertiary);
    }

    /* Sidebar Header */
    .sidebar-header {
        padding: 1.5rem;
        border-bottom: 1px solid var(--border);
        flex-shrink: 0;
    }

    .sidebar-logo {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .logo-wrapper {
        width: 48px;
        height: 48px;
        flex-shrink: 0;
        position: relative;
    }

    .logo-image {
        width: 100%;
        height: 100%;
        border-radius: 12px;
        object-fit: cover;
        border: 2px solid rgba(37, 99, 235, 0.3);
        box-shadow: 0 2px 8px rgba(37, 99, 235, 0.2);
    }

    .logo-text {
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .logo-title {
        font-size: 1.25rem;
        font-weight: 800;
        color: var(--text-main);
        line-height: 1.2;
        background: linear-gradient(135deg, var(--primary), #a855f7);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .logo-subtitle {
        font-size: 0.75rem;
        color: var(--text-muted);
        line-height: 1.2;
    }

    /* Sidebar Navigation */
    .sidebar-nav {
        flex: 1;
        padding: 1rem 0.75rem;
        overflow-y: auto;
    }

    .sidebar-divider {
        height: 1px;
        background: var(--border);
        margin: 1rem 0.5rem;
    }

    /* Sidebar Footer */
    .sidebar-footer {
        padding: 1rem;
        border-top: 1px solid var(--border);
        flex-shrink: 0;
    }

    .collapse-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        width: 100%;
        padding: 0.75rem;
        background: rgba(37, 99, 235, 0.1);
        border: 1px solid rgba(37, 99, 235, 0.2);
        border-radius: 10px;
        color: var(--primary);
        font-size: 0.875rem;
        font-weight: 600;
        font-family: var(--font-family);
        cursor: pointer;
        transition: all 0.2s;
    }

    .collapse-btn:hover {
        background: rgba(37, 99, 235, 0.2);
        border-color: var(--primary);
    }

    .collapse-btn svg {
        width: 18px;
        height: 18px;
    }

    .footer-info {
        margin-top: 0.75rem;
        text-align: center;
    }

    .footer-text {
        font-size: 0.75rem;
        color: var(--text-tertiary);
        margin: 0;
    }

    /* Responsive Adjustments */
    @media (max-width: 767px) {
        .sidebar-header {
            padding: 1rem;
        }

        .logo-wrapper {
            width: 40px;
            height: 40px;
        }

        .logo-title {
            font-size: 1.125rem;
        }
    }
</style>