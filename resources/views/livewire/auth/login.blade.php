<div x-data="{ showPassword: false }">
    <div class="attendance-page">
        <div class="attendance-container">

            <!-- Left Side: Branding/Hero (Hidden on Mobile) -->
            <div class="brand-sidebar">
                <div class="brand-content">
                    <div class="badge">System v2.0</div>
                    <h1 class="logo-text">Attend<span class="text-blue-accent">Ease</span></h1>
                    <h2 class="brand-title">
                        Simplify your <span class="gradient-text">Workforce Tracking.</span>
                    </h2>
                    <ul class="feature-list">
                        <li><span class="icon">✓</span> Real-time Clock-in</li>
                        <li><span class="icon">✓</span> Geofencing Enabled</li>
                        <li><span class="icon">✓</span> Automated Reporting</li>
                    </ul>
                </div>
                <div class="brand-footer">
                    <p>© 2024 Attendance Management System</p>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="form-section">
                <div class="form-wrapper">

                    <div class="form-header">
                        <h2 class="form-title">Staff Portal</h2>
                        <p class="form-subtitle">Enter your credentials to access your dashboard.</p>
                    </div>

                    <form wire:submit.prevent="login" class="attendance-form">

                        @if (session()->has('error'))
                            <div class="alert alert-error" x-data="{ show: true }" x-show="show">
                                <div class="flex-between">
                                    <span>{{ session('error') }}</span>
                                    <button @click="show = false" type="button" class="close-btn">&times;</button>
                                </div>
                            </div>
                        @endif

                        <!-- Email/ID -->
                        <div class="form-group">
                            <label class="form-label">Work Email / Employee ID</label>
                            <div class="input-relative">
                                <input type="email"
                                       wire:model="email"
                                       class="form-input @error('email') input-error @enderror"
                                       placeholder="name@company.com">
                                <span class="input-icon">✉</span>
                            </div>
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <div class="flex-between">
                                <label class="form-label">Password</label>
                                <a href="#" class="link-text">Forgot?</a>
                            </div>
                            <div class="input-relative">
                                <input :type="showPassword ? 'text' : 'password'"
                                       wire:model="password"
                                       class="form-input @error('password') input-error @enderror"
                                       placeholder="••••••••">
                                <button type="button" class="input-icon toggle-pass" @click="showPassword = !showPassword">
                                    <span x-show="!showPassword">👁️</span>
                                    <span x-show="showPassword">🙈</span>
                                </button>
                            </div>
                            @error('password')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Remember -->
                        <div class="form-row">
                            <label class="checkbox-container">
                                <input type="checkbox" wire:model="remember">
                                <span class="checkmark"></span>
                                <span class="label-text">Keep me clocked in</span>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                                class="btn btn-primary"
                                wire:loading.attr="disabled">
                            <span wire:loading.remove>Authorize & Log In</span>
                            <span wire:loading>
                                <svg class="spinner" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" fill="none" stroke="currentColor" stroke-width="4"></circle></svg>
                                Authenticating...
                            </span>
                        </button>
                    </form>

                    <div class="form-footer">
                        <p>Trouble logging in? <a href="#" class="link-text">Contact HR Support</a></p>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <style>
        /* Modern Design Tokens */
        :root {
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --bg-dark: #0f172a;
            --bg-card: #1e293b;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --error: #ef4444;
            --border: #334155;
            --font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }

        .attendance-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--bg-dark);
            font-family: var(--font-family);
            padding: 1.5rem;
            color: var(--text-main);
        }

        .attendance-container {
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            width: 100%;
            max-width: 1100px;
            min-height: 650px;
            background: var(--bg-card);
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            border: 1px solid var(--border);
        }

        /* Sidebar Styling */
        .brand-sidebar {
            background: linear-gradient(160deg, #1e293b 0%, #0f172a 100%);
            padding: 4rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            border-right: 1px solid var(--border);
        }

        .badge {
            display: inline-block;
            padding: 4px 12px;
            background: rgba(37, 99, 235, 0.2);
            color: #60a5fa;
            border-radius: 100px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-bottom: 2rem;
            border: 1px solid rgba(37, 99, 235, 0.3);
        }

        .logo-text { font-size: 2.2rem; font-weight: 800; letter-spacing: -1px; margin-bottom: 1rem; }
        .text-blue-accent { color: var(--primary); }

        .brand-title {
            font-size: 2.5rem;
            line-height: 1.1;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .gradient-text {
            background: linear-gradient(to right, #60a5fa, #a855f7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            color: var(--text-muted);
        }

        .feature-list li {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .feature-list .icon { color: #10b981; font-weight: bold; }

        .brand-footer { font-size: 0.85rem; color: #475569; }

        /* Form Section Styling */
        .form-section {
            padding: 4rem 3rem;
            background: #1e293b;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-wrapper { width: 100%; max-width: 380px; }
        .form-title { font-size: 1.75rem; font-weight: 700; margin-bottom: 0.5rem; }
        .form-subtitle { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 2.5rem; }

        .form-group { margin-bottom: 1.5rem; }
        .form-label { display: block; font-size: 0.875rem; font-weight: 500; margin-bottom: 0.5rem; color: #cbd5e1; }

        .input-relative { position: relative; }
        .form-input {
            width: 100%;
            padding: 0.8rem 1rem 0.8rem 2.5rem;
            background: #0f172a;
            border: 1px solid var(--border);
            border-radius: 12px;
            color: white;
            font-size: 1rem;
            transition: all 0.2s;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.15);
        }

        .input-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #475569;
        }

        .toggle-pass {
            left: auto;
            right: 12px;
            background: none;
            border: none;
            cursor: pointer;
            color: #94a3b8;
        }

        .flex-between { display: flex; justify-content: space-between; align-items: center; }

        .btn-primary {
            width: 100%;
            background: var(--primary);
            color: white;
            padding: 0.9rem;
            border-radius: 12px;
            border: none;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .btn-primary:hover { background: var(--primary-hover); }

        .link-text { color: var(--primary); text-decoration: none; font-size: 0.875rem; font-weight: 500; }
        .link-text:hover { text-decoration: underline; }

        .error-message { color: var(--error); font-size: 0.8rem; margin-top: 0.4rem; display: block; }
        .alert-error { background: #451a1a; border: 1px solid #7f1d1d; color: #fecaca; padding: 0.75rem 1rem; border-radius: 10px; margin-bottom: 1.5rem; font-size: 0.9rem; }

        .spinner { width: 18px; height: 18px; animation: rotate 1s linear infinite; }
        @keyframes rotate { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }

        /* Checkbox Custom Styling */
        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        /* Responsive Breakpoints */
        @media (max-width: 1024px) {
            .brand-sidebar { padding: 2rem; }
            .brand-title { font-size: 2rem; }
        }

        @media (max-width: 900px) {
            .attendance-container { grid-template-columns: 1fr; max-width: 500px; }
            .brand-sidebar { display: none; }
            .form-section { padding: 3rem 2rem; }
        }

        @media (max-width: 480px) {
            .attendance-page { padding: 0; }
            .attendance-container { border-radius: 0; border: none; min-height: 100vh; }
            .form-title { font-size: 1.5rem; }
        }
    </style>
</div>