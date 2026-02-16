<header class="app-header" x-data="{ userMenuOpen: false }">
    <div class="header-container">
        <!-- Mobile Menu Button & Logo -->
        <div class="header-left">
            <button @click="sidebarOpen = !sidebarOpen" class="mobile-menu-btn">
                <svg class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div class="logo-section">
                <div class="logo-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586l5.414 5.414" />
                    </svg>
                </div>
                <h1 class="app-title">Document Hub</h1>
            </div>
        </div>

        <!-- Right Section - Search & User Menu -->
        <div class="header-right">
            <!-- Search Bar (Optional) -->
            <div class="search-container">
                <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <path d="m21 21-4.35-4.35"/>
                </svg>
                <input type="text" placeholder="Search documents..." class="search-input">
            </div>

            <!-- Notifications (Optional) -->
            <button class="icon-btn" title="Notifications">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                </svg>
                <span class="notification-badge">3</span>
            </button>

            <!-- User Menu -->
            <div class="user-menu-container" x-data="{ userMenuOpen: false }">
                <button @click="userMenuOpen = !userMenuOpen" class="user-menu-trigger">
                    <div class="user-avatar">
                        {{ strtoupper(substr(auth()->user()->first_name, 0, 1) . substr(auth()->user()->last_name, 0, 1)) }}
                    </div>
                    <div class="user-info">
                        <span class="user-name">{{ auth()->user()->full_name }}</span>
                        <span class="user-role">Administrator</span>
                    </div>
                    <svg class="chevron-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="userMenuOpen"
                    @click.away="userMenuOpen = false"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                    x-transition:leave-end="opacity-0 scale-95 -translate-y-2"
                    class="user-dropdown"
                    style="display: none;">
                    
                    <!-- User Info Header -->
                    <div class="dropdown-header">
                        <div class="dropdown-avatar">
                            {{ strtoupper(substr(auth()->user()->first_name, 0, 1) . substr(auth()->user()->last_name, 0, 1)) }}
                        </div>
                        <div class="dropdown-user-info">
                            <p class="dropdown-name">{{ auth()->user()->full_name }}</p>
                            <p class="dropdown-email">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                    
                    <div class="dropdown-divider"></div>
                    
                    <!-- Menu Items -->
                    <a wire:navigate href="{{ route('profile') }}" class="dropdown-item">
                        <svg class="dropdown-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 4a4 4 0 110 8 4 4 0 010-8zm-8 16a6 6 0 0116 0" />
                        </svg>
                        <span>My Profile</span>
                    </a>
                    
                    <a wire:navigate href="{{ route('dashboard.index') }}" class="dropdown-item">
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
                            <path d="M12 1v6m0 6v6M5.64 5.64l4.24 4.24m4.24 4.24l4.24 4.24M1 12h6m6 0h6M5.64 18.36l4.24-4.24m4.24-4.24l4.24-4.24"/>
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
        --danger: #ef4444;
        --danger-hover: #dc2626;
        --success: #10b981;
        --font-family: 'Inter', system-ui, -apple-system, sans-serif;
    }

    /* Header Container */
    .app-header {
        background: var(--bg-card);
        border-bottom: 1px solid var(--border);
        position: sticky;
        top: 0;
        z-index: 40;
        backdrop-filter: blur(12px);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    }

    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 1.5rem;
        max-width: 100%;
        margin: 0 auto;
    }

    /* Left Section */
    .header-left {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .mobile-menu-btn {
        display: none;
        width: 40px;
        height: 40px;
        border: none;
        background: transparent;
        border-radius: 10px;
        cursor: pointer;
        color: var(--text-muted);
        transition: all 0.2s;
    }

    .mobile-menu-btn:hover {
        background: rgba(37, 99, 235, 0.1);
        color: var(--primary);
    }

    .mobile-menu-btn .icon {
        width: 24px;
        height: 24px;
    }

    .logo-section {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .logo-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, var(--primary), #a855f7);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .logo-icon svg {
        width: 24px;
        height: 24px;
    }

    .app-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--text-main);
        font-family: var(--font-family);
        margin: 0;
    }

    /* Right Section */
    .header-right {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    /* Search Bar */
    .search-container {
        position: relative;
        display: none; /* Hidden on mobile, show on larger screens */
    }

    .search-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        width: 18px;
        height: 18px;
        color: var(--text-muted);
        pointer-events: none;
    }

    .search-input {
        width: 300px;
        padding: 0.625rem 1rem 0.625rem 2.75rem;
        background: var(--bg-dark);
        border: 1px solid var(--border);
        border-radius: 10px;
        color: var(--text-main);
        font-size: 0.875rem;
        font-family: var(--font-family);
        transition: all 0.2s;
    }

    .search-input:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .search-input::placeholder {
        color: var(--text-tertiary);
    }

    /* Icon Button */
    .icon-btn {
        position: relative;
        width: 40px;
        height: 40px;
        border: none;
        background: transparent;
        border-radius: 10px;
        cursor: pointer;
        color: var(--text-muted);
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon-btn:hover {
        background: rgba(37, 99, 235, 0.1);
        color: var(--primary);
    }

    .icon-btn svg {
        width: 20px;
        height: 20px;
    }

    .notification-badge {
        position: absolute;
        top: 6px;
        right: 6px;
        width: 18px;
        height: 18px;
        background: var(--danger);
        border: 2px solid var(--bg-card);
        border-radius: 50%;
        font-size: 10px;
        font-weight: 700;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* User Menu */
    .user-menu-container {
        position: relative;
    }

    .user-menu-trigger {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem;
        background: transparent;
        border: 1px solid var(--border);
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.2s;
        font-family: var(--font-family);
    }

    .user-menu-trigger:hover {
        background: rgba(37, 99, 235, 0.05);
        border-color: var(--primary);
    }

    .user-avatar {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, var(--primary), #a855f7);
        border-radius: 10px;
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
        align-items: flex-start;
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
        line-height: 1.2;
    }

    .chevron-icon {
        width: 16px;
        height: 16px;
        color: var(--text-muted);
        transition: transform 0.2s;
    }

    .user-menu-trigger:hover .chevron-icon {
        color: var(--primary);
    }

    /* Dropdown Menu */
    .user-dropdown {
        position: absolute;
        top: calc(100% + 0.5rem);
        right: 0;
        width: 280px;
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
        overflow: hidden;
        z-index: 50;
    }

    .dropdown-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1rem;
        background: rgba(37, 99, 235, 0.05);
    }

    .dropdown-avatar {
        width: 48px;
        height: 48px;
        background: linear-gradient(135deg, var(--primary), #a855f7);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1rem;
        font-weight: 700;
        flex-shrink: 0;
    }

    .dropdown-user-info {
        flex: 1;
        min-width: 0;
    }

    .dropdown-name {
        font-size: 0.9375rem;
        font-weight: 600;
        color: var(--text-main);
        margin: 0 0 0.25rem 0;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .dropdown-email {
        font-size: 0.8125rem;
        color: var(--text-muted);
        margin: 0;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .dropdown-divider {
        height: 1px;
        background: var(--border);
        margin: 0.5rem 0;
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
        text-align: left;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.2s;
    }

    .dropdown-item:hover {
        background: rgba(37, 99, 235, 0.1);
        color: var(--primary);
    }

    .dropdown-item-danger {
        color: var(--text-main);
    }

    .dropdown-item-danger:hover {
        background: rgba(239, 68, 68, 0.1);
        color: var(--danger);
    }

    .dropdown-icon {
        width: 18px;
        height: 18px;
        flex-shrink: 0;
    }

    /* Responsive Design */
    @media (min-width: 768px) {
        .search-container {
            display: block;
        }
    }

    @media (max-width: 767px) {
        .mobile-menu-btn {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .app-title {
            font-size: 1.125rem;
        }

        .user-info {
            display: none;
        }

        .user-menu-trigger {
            padding: 0.375rem;
        }

        .icon-btn {
            display: none; /* Hide notifications on mobile */
        }

        .header-container {
            padding: 0.75rem 1rem;
        }
    }

    @media (max-width: 480px) {
        .logo-icon {
            width: 36px;
            height: 36px;
        }

        .logo-icon svg {
            width: 20px;
            height: 20px;
        }

        .app-title {
            font-size: 1rem;
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            font-size: 0.8125rem;
        }
    }
</style>