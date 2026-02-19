<!-- Mobile Overlay -->
<div x-show="sidebarOpen && window.innerWidth < 768"
     @click="sidebarOpen = false"
     class="sidebar-overlay"
     style="display: none;">
</div>

<!-- Sidebar -->
<aside :class="sidebarCollapsed ? 'sidebar-collapsed' : 'sidebar-expanded'"
       class="app-sidebar">

    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <div class="logo-icon-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 7V5a2 2 0 0 1 2-2h2M17 3h2a2 2 0 0 1 2 2v2m0 10v2a2 2 0 0 1-2 2h-2M7 21H5a2 2 0 0 1-2-2v-2"/>
                    <rect x="7" y="7" width="10" height="10" rx="1"/>
                </svg>
            </div>
            <div x-show="!sidebarCollapsed" x-transition class="logo-text-group">
                <span class="logo-title">Attend<span class="logo-accent">Ease</span></span>
                <span class="logo-subtitle">Attendance System</span>
            </div>
        </div>
    </div>

    <!-- Navigation -->
<nav class="sidebar-nav">

    <!-- Dashboard -->
    <a href="{{ route('dashboard') }}"
       class="nav-item {{ request()->routeIs('dashboard') ? 'nav-item-active' : '' }}">
        <div class="nav-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="7" height="7"/>
                <rect x="14" y="3" width="7" height="7"/>
                <rect x="14" y="14" width="7" height="7"/>
                <rect x="3" y="14" width="7" height="7"/>
            </svg>
        </div>
        <span x-show="!sidebarCollapsed" x-transition class="nav-label">Dashboard</span>
    </a>

    <!-- Attendance -->
    <a href="#" class="nav-item">
        <div class="nav-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
        </div>
        <span x-show="!sidebarCollapsed" x-transition class="nav-label">Attendance</span>
    </a>

    <!-- QR Scanner -->
    <a href="#" class="nav-item">
        <div class="nav-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 7V5a2 2 0 0 1 2-2h2M17 3h2a2 2 0 0 1 2 2v2m0 10v2a2 2 0 0 1-2 2h-2M7 21H5a2 2 0 0 1-2-2v-2"/>
                <rect x="7" y="7" width="10" height="10" rx="1"/>
            </svg>
        </div>
        <span x-show="!sidebarCollapsed" x-transition class="nav-label">QR Scanner</span>
    </a>

    <!-- Reports -->
    <a href="#" class="nav-item">
        <div class="nav-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
        </div>
        <span x-show="!sidebarCollapsed" x-transition class="nav-label">Reports</span>
    </a>

    <!-- Users -->
    <a href="#" class="nav-item">
        <div class="nav-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 4a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm-8 16a8 8 0 1 1 16 0"/>
            </svg>
        </div>
        <span x-show="!sidebarCollapsed" x-transition class="nav-label">Users</span>
    </a>

    <!-- Audit Trail -->
    <a href="#" class="nav-item">
        <div class="nav-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 8v4l3 3"/>
                <circle cx="12" cy="12" r="9"/>
            </svg>
        </div>
        <span x-show="!sidebarCollapsed" x-transition class="nav-label">Audit Trail</span>
    </a>

    <!-- Settings -->
    <a href="#" class="nav-item">
        <div class="nav-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="3"/>
                <path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>
            </svg>
        </div>
        <span x-show="!sidebarCollapsed" x-transition class="nav-label">Settings</span>
    </a>

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
            <span x-show="!sidebarCollapsed" x-transition>Collapse</span>
        </button>
    </div>
</aside>

<style>
    :root {
        --primary: #2563eb;
        --primary-hover: #1d4ed8;
        --bg-dark: #0f172a;
        --bg-card: #1e293b;
        --text-main: #f8fafc;
        --text-muted: #94a3b8;
        --border: #334155;
        --sidebar-width: 280px;
        --sidebar-collapsed-width: 80px;
        --font-family: 'Inter', system-ui, -apple-system, sans-serif;
    }

    .sidebar-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0,0,0,0.5);
        z-index: 25;
    }

    .app-sidebar {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        background: var(--bg-card);
        border-right: 1px solid var(--border);
        display: flex;
        flex-direction: column;
        transition: width 0.3s ease;
        z-index: 30;
        overflow: hidden;
        font-family: var(--font-family);
    }

    .sidebar-expanded { width: var(--sidebar-width); }
    .sidebar-collapsed { width: var(--sidebar-collapsed-width); }

    /* Header */
    .sidebar-header {
        padding: 1.5rem;
        border-bottom: 1px solid var(--border);
        flex-shrink: 0;
    }

    .sidebar-logo {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .logo-icon-box {
        width: 44px;
        height: 44px;
        background: linear-gradient(135deg, #2563eb, #a855f7);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        flex-shrink: 0;
    }

    .logo-icon-box svg { width: 22px; height: 22px; }

    .logo-text-group {
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .logo-title {
        font-size: 1.25rem;
        font-weight: 800;
        color: var(--text-main);
        white-space: nowrap;
    }

    .logo-accent { color: #60a5fa; }

    .logo-subtitle {
        font-size: 0.75rem;
        color: var(--text-muted);
        white-space: nowrap;
    }

    /* Nav */
    .sidebar-nav {
        flex: 1;
        padding: 1rem 0.75rem;
        overflow-y: auto;
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .nav-item {
        display: flex;
        align-items: center;
        gap: 0.875rem;
        padding: 0.75rem;
        border-radius: 12px;
        color: var(--text-muted);
        text-decoration: none;
        font-size: 0.9375rem;
        font-weight: 500;
        transition: all 0.2s;
        white-space: nowrap;
    }

    .nav-item:hover {
        background: rgba(37, 99, 235, 0.1);
        color: var(--text-main);
    }

    .nav-item-active {
        background: rgba(37, 99, 235, 0.15);
        color: #60a5fa;
        border: 1px solid rgba(37, 99, 235, 0.2);
    }

    .nav-icon {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border-radius: 8px;
    }

    .nav-icon svg { width: 20px; height: 20px; }

    .nav-label { flex: 1; }

    .nav-divider {
        height: 1px;
        background: var(--border);
        margin: 0.5rem 0.25rem;
    }

    /* Footer */
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
        color: #60a5fa;
        font-size: 0.875rem;
        font-weight: 600;
        font-family: var(--font-family);
        cursor: pointer;
        transition: all 0.2s;
        white-space: nowrap;
        overflow: hidden;
    }

    .collapse-btn:hover {
        background: rgba(37, 99, 235, 0.2);
    }

    .collapse-btn svg { width: 18px; height: 18px; flex-shrink: 0; }

    @media (max-width: 767px) {
        .app-sidebar {
            transform: translateX(-100%);
            transition: transform 0.3s ease, width 0.3s ease;
        }
        .app-sidebar.sidebar-expanded {
            transform: translateX(0);
        }
    }
</style>