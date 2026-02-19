<div x-data="{ showPassword: false, showConfirm: false }">
    <div class="attendance-page">
        <div class="attendance-container">

            <!-- Left Side: Branding/Hero (Hidden on Mobile) -->
            <div class="brand-sidebar">
                <div class="brand-content">
                    <div class="badge">System v2.0</div>
                    <h1 class="logo-text">Attend<span class="text-blue-accent">Ease</span></h1>
                    <h2 class="brand-title">
                        Join your <span class="gradient-text">Team Today.</span>
                    </h2>
                    <ul class="feature-list">
                        <li><span class="icon">✓</span> Quick Setup in Minutes</li>
                        <li><span class="icon">✓</span> Secure Employee Portal</li>
                        <li><span class="icon">✓</span> Instant Dashboard Access</li>
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
                        <h2 class="form-title">Create Account</h2>
                        <p class="form-subtitle">Fill in your details to register as staff.</p>
                    </div>

                    <form class="attendance-form">

                        <!-- First Name & Last Name -->
                        <div class="form-row-grid">
                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <div class="input-relative">
                                    <input type="text"
                                           class="form-input"
                                           placeholder="Juan">
                                    <span class="input-icon">👤</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <div class="input-relative">
                                    <input type="text"
                                           class="form-input"
                                           placeholder="Dela Cruz">
                                    <span class="input-icon">👤</span>
                                </div>
                            </div>
                        </div>

                        <!-- Work Email -->
                        <div class="form-group">
                            <label class="form-label">Work Email</label>
                            <div class="input-relative">
                                <input type="email"
                                       class="form-input"
                                       placeholder="name@company.com">
                                <span class="input-icon">✉</span>
                            </div>
                        </div>

                        <!-- Employee ID -->
                        <div class="form-group">
                            <label class="form-label">Employee ID</label>
                            <div class="input-relative">
                                <input type="text"
                                       class="form-input"
                                       placeholder="EMP-00001">
                                <span class="input-icon">#</span>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <div class="input-relative">
                                <input :type="showPassword ? 'text' : 'password'"
                                       class="form-input"
                                       placeholder="••••••••">
                                <button type="button" class="input-icon toggle-pass" @click="showPassword = !showPassword">
                                    <span x-show="!showPassword">👁️</span>
                                    <span x-show="showPassword">🙈</span>
                                </button>
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label class="form-label">Confirm Password</label>
                            <div class="input-relative">
                                <input :type="showConfirm ? 'text' : 'password'"
                                       class="form-input"
                                       placeholder="••••••••">
                                <button type="button" class="input-icon toggle-pass" @click="showConfirm = !showConfirm">
                                    <span x-show="!showConfirm">👁️</span>
                                    <span x-show="showConfirm">🙈</span>
                                </button>
                            </div>
                        </div>

                        <!-- Terms -->
                        <div class="form-row" style="margin-bottom: 1.5rem;">
                            <label class="checkbox-container">
                                <input type="checkbox">
                                <span class="label-text">I agree to the
                                    <a href="#" class="link-text">Terms of Service</a> and
                                    <a href="#" class="link-text">Privacy Policy</a>
                                </span>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">
                            Create Account
                        </button>

                    </form>

                    <div class="form-footer">
                        <p>Already have an account? <a href="{{ route('login') }}" class="link-text">Sign in here</a></p>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <style>
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

        /* Sidebar */
        .brand-sidebar {
            background: linear-gradient(160deg, #1e293b 0%, #0f172a 100%);
            padding: 4rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
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

        /* Form Section */
        .form-section {
            padding: 3rem 3rem;
            background: #1e293b;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-y: auto;
        }

        .form-wrapper { width: 100%; max-width: 400px; }
        .form-title { font-size: 1.75rem; font-weight: 700; margin-bottom: 0.5rem; }
        .form-subtitle { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 2rem; }

        .form-group { margin-bottom: 1.25rem; }
        .form-label { display: block; font-size: 0.875rem; font-weight: 500; margin-bottom: 0.5rem; color: #cbd5e1; }

        /* Two column grid for first/last name */
        .form-row-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

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
            box-sizing: border-box;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.15);
        }

        .form-input::placeholder { color: #475569; }

        .input-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #475569;
            font-style: normal;
        }

        .toggle-pass {
            left: auto;
            right: 12px;
            background: none;
            border: none;
            cursor: pointer;
            color: #94a3b8;
        }

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

        .checkbox-container {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            cursor: pointer;
            font-size: 0.875rem;
            color: var(--text-muted);
            line-height: 1.5;
        }

        .checkbox-container input { margin-top: 3px; flex-shrink: 0; }

        .form-footer {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        /* Responsive */
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
            .form-row-grid { grid-template-columns: 1fr; }
        }
    </style>
</div>