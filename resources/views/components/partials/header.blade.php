<header class="app-header" x-data="{ userMenuOpen: false }">
    <div class="header-container">

        <!-- Left: Mobile toggle + Logo -->
        <div class="header-left">
            <button @click="sidebarCollapsed = !sidebarCollapsed" class="mobile-menu-btn">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            <div class="logo-section">
                <span class="app-title">Attend<span style="color:#60a5fa;">Ease</span></span>
            </div>
        </div>

        <!-- Right: User menu -->
        <div class="header-right">

            <!-- Notifications -->
            <button class="icon-btn" title="Notifications">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                </svg>
                <span class="notification-badge">3</span>
            </button>

            <!-- User Menu -->
            <div class="user-menu-container">
                <button @click="userMenuOpen = !userMenuOpen" class="user-menu-trigger">
                    <div class="user-avatar">
                        {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                    </div>
                    <div class="user-info">
                        <span class="user-name">{{ auth()->user()->name ?? 'User' }}</span>
                        <span class="user-role">Staff</span>
                    </div>
                    <svg style="width:16px;height:16px;color:#94a3b8;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <!-- Dropdown -->
                <div x-show="userMenuOpen"
                     @click.away="userMenuOpen = false"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="user-dropdown"
                     style="display:none;">

                    <div class="dropdown-header">
                        <div class="dropdown-avatar">
                            {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                        </div>
                        <div>
                            <p class="dropdown-name">{{ auth()->user()->name ?? 'User' }}</p>
                            <p class="dropdown-email">{{ auth()->user()->email ?? '' }}</p>
                        </div>
                    </div>

                    <div class="dropdown-divider"></div>

                    <a href="{{ route('dashboard') }}" class="dropdown-item">
                        <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="7" height="7"/>
                            <rect x="14" y="3" width="7" height="7"/>
                            <rect x="14" y="14" width="7" height="7"/>
                            <rect x="3" y="14" width="7" height="7"/>
                        </svg>
                        <span>Dashboard</span>
                    </a>

                    <a href="#" class="dropdown-item">
                        <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83"/>
                        </svg>
                        <span>Settings</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <button type="button"
                            @click="userMenuOpen = false; logoutModalOpen = true"
                            class="dropdown-item dropdown-item-danger">
                        <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                            <polyline points="16 17 21 12 16 7"/>
                            <line x1="21" y1="12" x2="9" y2="12"/>
                        </svg>
                        <span>Logout</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    :root {
        --primary: #2563eb;
        --bg-card: #1e293b;
        --text-main: #f8fafc;
        --text-muted: #94a3b8;
        --border: #334155;
        --danger: #ef4444;
        --font-family: 'Inter', system-ui, -apple-system, sans-serif;
    }

    .app-header {
        background: var(--bg-card);
        border-bottom: 1px solid var(--border);
        position: sticky;
        top: 0;
        z-index: 40;
        font-family: var(--font-family);
    }

    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 1.5rem;
    }

    .header-left {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .mobile-menu-btn {
        width: 40px;
        height: 40px;
        border: none;
        background: transparent;
        border-radius: 10px;
        cursor: pointer;
        color: var(--text-muted);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
    }

    .mobile-menu-btn:hover {
        background: rgba(37,99,235,0.1);
        color: var(--primary);
    }

    .app-title {
        font-size: 1.25rem;
        font-weight: 800;
        color: var(--text-main);
    }

    .header-right {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .icon-btn {
        position: relative;
        width: 40px;
        height: 40px;
        border: none;
        background: transparent;
        border-radius: 10px;
        cursor: pointer;
        color: var(--text-muted);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
    }

    .icon-btn:hover {
        background: rgba(37,99,235,0.1);
        color: var(--primary);
    }

    .icon-btn svg { width: 20px; height: 20px; }

    .notification-badge {
        position: absolute;
        top: 6px;
        right: 6px;
        width: 16px;
        height: 16px;
        background: var(--danger);
        border-radius: 50%;
        font-size: 10px;
        font-weight: 700;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .user-menu-container { position: relative; }

    .user-menu-trigger {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem 0.75rem;
        background: transparent;
        border: 1px solid var(--border);
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.2s;
        font-family: var(--font-family);
    }

    .user-menu-trigger:hover {
        border-color: var(--primary);
        background: rgba(37,99,235,0.05);
    }

    .user-avatar {
        width: 36px;
        height: 36px;
        background: linear-gradient(135deg, #2563eb, #a855f7);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 0.875rem;
        font-weight: 700;
        flex-shrink: 0;
    }

    .user-info {
        display: flex;
        flex-direction: column;
        text-align: left;
    }

    .user-name {
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--text-main);
        line-height: 1.2;
    }

    .user-role {
        font-size: 0.75rem;
        color: var(--text-muted);
    }

    .user-dropdown {
        position: absolute;
        top: calc(100% + 0.5rem);
        right: 0;
        width: 260px;
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.4);
        overflow: hidden;
        z-index: 50;
    }

    .dropdown-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1rem;
        background: rgba(37,99,235,0.05);
    }

    .dropdown-avatar {
        width: 44px;
        height: 44px;
        background: linear-gradient(135deg, #2563eb, #a855f7);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1rem;
        font-weight: 700;
        flex-shrink: 0;
    }

    .dropdown-name {
        font-size: 0.9375rem;
        font-weight: 600;
        color: var(--text-main);
        margin: 0 0 0.2rem 0;
    }

    .dropdown-email {
        font-size: 0.8125rem;
        color: var(--text-muted);
        margin: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-width: 160px;
    }

    .dropdown-divider {
        height: 1px;
        background: var(--border);
        margin: 0.25rem 0;
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 1rem;
        width: 100%;
        border: none;
        background: transparent;
        color: var(--text-main);
        font-size: 0.875rem;
        font-weight: 500;
        font-family: var(--font-family);
        text-decoration: none;
        cursor: pointer;
        transition: all 0.2s;
        text-align: left;
    }

    .dropdown-item:hover {
        background: rgba(37,99,235,0.1);
        color: #60a5fa;
    }

    .dropdown-item-danger:hover {
        background: rgba(239,68,68,0.1);
        color: var(--danger);
    }

    .dropdown-icon { width: 18px; height: 18px; flex-shrink: 0; }

    @media (max-width: 767px) {
        .user-info { display: none; }
        .header-container { padding: 0.75rem 1rem; }
    }
</style>