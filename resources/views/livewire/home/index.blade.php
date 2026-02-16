<div class="homepage">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-badge">
                <svg class="badge-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                </svg>
                <span>Lightning Fast Scanning</span>
            </div>
            
            <h1 class="hero-title">
               Mary's Attendance
                <span class="gradient-text">Scanner</span>
            </h1>
            
            <p class="hero-description">
                The most powerful QR code and barcode scanner. Fast, accurate, and beautifully designed 
                for modern workflows.
            </p>
            
            <div class="hero-buttons">
                <button class="btn btn-primary btn-large">
                    <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 7V5a2 2 0 0 1 2-2h2M17 3h2a2 2 0 0 1 2 2v2m0 10v2a2 2 0 0 1-2 2h-2M7 21H5a2 2 0 0 1-2-2v-2"/>
                        <rect x="7" y="7" width="10" height="10" rx="1"/>
                    </svg>
                    Sign Up
                </button>
                <button class="btn btn-secondary btn-large">
                    <svg class="btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="5 3 19 12 5 21 5 3"/>
                    </svg>
                    Watch Demo
                </button>
            </div>
            
            <div class="hero-stats">
                <div class="stat-item">
                    <div class="stat-number">10M+</div>
                    <div class="stat-label">Scans Processed</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <div class="stat-number">99.9%</div>
                    <div class="stat-label">Accuracy Rate</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <div class="stat-number">&lt;0.5s</div>
                    <div class="stat-label">Scan Time</div>
                </div>
            </div>
        </div>
        
        <div class="hero-visual">
            <div class="phone-mockup">
                <div class="phone-screen">
                    <div class="scan-animation">
                        <div class="scan-grid">
                            <div class="scan-line"></div>
                            <div class="scan-corners">
                                <div class="corner corner-tl"></div>
                                <div class="corner corner-tr"></div>
                                <div class="corner corner-bl"></div>
                                <div class="corner corner-br"></div>
                            </div>
                            <div class="scan-target"></div>
                        </div>
                    </div>
                </div>
                <div class="phone-notch"></div>
            </div>
            
            <!-- Floating Elements -->
            <div class="floating-element element-1">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                </svg>
            </div>
            <div class="floating-element element-2">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <polyline points="12 6 12 12 16 14"/>
                </svg>
            </div>
            <div class="floating-element element-3">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                    <polyline points="22 4 12 14.01 9 11.01"/>
                </svg>
            </div>
        </div>
    </section>
    
   
    
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Start Scanning?</h2>
            <p class="cta-description">Join thousands of users who trust Scanner for their daily scanning needs</p>
            <div class="cta-buttons">
                <button class="btn btn-primary btn-large">
                    Get Started Free
                </button>
                <button class="btn btn-secondary btn-large">
                    Contact Sales
                </button>
            </div>
        </div>
        
        <div class="cta-decoration">
            <div class="decoration-grid"></div>
        </div>
    </section>
</div>

<style>
    /* Modern Design Tokens - Matching Login Page */
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
        --gradient-start: #60a5fa;
        --gradient-end: #a855f7;
        --font-family: 'Inter', system-ui, -apple-system, sans-serif;
    }
    
    /* Base Homepage Styling */
    .homepage {
        background: var(--bg-dark);
        color: var(--text-main);
        font-family: var(--font-family);
        padding: 2rem 1.5rem 4rem;
        min-height: 100vh;
    }
    
    /* Hero Section */
    .hero-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        padding: 4rem 0;
        min-height: 85vh;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .hero-content {
        animation: fadeInLeft 0.8s ease-out;
    }
    
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        background: rgba(37, 99, 235, 0.2);
        border: 1px solid rgba(37, 99, 235, 0.3);
        border-radius: 100px;
        color: var(--accent);
        font-size: 0.875rem;
        font-weight: 600;
        margin-bottom: 2rem;
    }
    
    .badge-icon {
        width: 16px;
        height: 16px;
    }
    
    .hero-title {
        font-size: 4rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        letter-spacing: -0.03em;
        color: var(--text-main);
    }
    
    .gradient-text {
        background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .hero-description {
        font-size: 1.125rem;
        line-height: 1.7;
        color: var(--text-muted);
        margin-bottom: 2.5rem;
        max-width: 540px;
    }
    
    .hero-buttons {
        display: flex;
        gap: 1rem;
        margin-bottom: 3rem;
        flex-wrap: wrap;
    }
    
    .btn {
        border: none;
        cursor: pointer;
        font-weight: 600;
        font-family: var(--font-family);
        transition: all 0.2s;
        border-radius: 12px;
    }
    
    .btn-large {
        padding: 1rem 2rem;
        font-size: 1rem;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .btn-primary {
        background: var(--primary);
        color: white;
    }
    
    .btn-primary:hover {
        background: var(--primary-hover);
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(37, 99, 235, 0.3);
    }
    
    .btn-secondary {
        background: var(--bg-card);
        color: var(--text-main);
        border: 1px solid var(--border);
    }
    
    .btn-secondary:hover {
        background: #334155;
        border-color: var(--primary);
    }
    
    .btn-icon {
        width: 20px;
        height: 20px;
    }
    
    .hero-stats {
        display: flex;
        align-items: center;
        gap: 2rem;
        padding: 2rem;
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: 16px;
        width: fit-content;
    }
    
    .stat-item {
        text-align: center;
    }
    
    .stat-number {
        font-size: 2rem;
        font-weight: 800;
        background: linear-gradient(135deg, var(--gradient-start), var(--gradient-end));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 0.25rem;
    }
    
    .stat-label {
        font-size: 0.875rem;
        color: var(--text-tertiary);
        font-weight: 500;
    }
    
    .stat-divider {
        width: 1px;
        height: 40px;
        background: var(--border);
    }
    
    /* Hero Visual */
    .hero-visual {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        animation: fadeInRight 0.8s ease-out;
    }
    
    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    .phone-mockup {
        position: relative;
        width: 320px;
        height: 640px;
        background: linear-gradient(135deg, #1e293b, #0f172a);
        border-radius: 40px;
        padding: 12px;
        box-shadow: 
            0 50px 100px rgba(0, 0, 0, 0.5),
            0 0 0 1px rgba(255, 255, 255, 0.1);
        animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% {
            transform: translateY(0) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(2deg);
        }
    }
    
    .phone-notch {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 140px;
        height: 30px;
        background: #0f172a;
        border-radius: 0 0 20px 20px;
        z-index: 10;
    }
    
    .phone-screen {
        width: 100%;
        height: 100%;
        background: #000;
        border-radius: 32px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .scan-animation {
        width: 100%;
        height: 100%;
        position: relative;
        background: 
            linear-gradient(0deg, transparent 24%, rgba(37, 99, 235, 0.05) 25%, rgba(37, 99, 235, 0.05) 26%, transparent 27%, transparent 74%, rgba(37, 99, 235, 0.05) 75%, rgba(37, 99, 235, 0.05) 76%, transparent 77%, transparent),
            linear-gradient(90deg, transparent 24%, rgba(37, 99, 235, 0.05) 25%, rgba(37, 99, 235, 0.05) 26%, transparent 27%, transparent 74%, rgba(37, 99, 235, 0.05) 75%, rgba(37, 99, 235, 0.05) 76%, transparent 77%, transparent);
        background-size: 20px 20px;
    }
    
    .scan-grid {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 200px;
        height: 200px;
    }
    
    .scan-line {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, var(--primary), transparent);
        box-shadow: 0 0 20px var(--primary);
        animation: scanLine 2s ease-in-out infinite;
    }
    
    @keyframes scanLine {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(200px);
        }
    }
    
    .scan-corners {
        position: absolute;
        inset: 0;
    }
    
    .corner {
        position: absolute;
        width: 30px;
        height: 30px;
        border: 3px solid var(--primary);
        animation: cornerPulse 2s ease-in-out infinite;
    }
    
    @keyframes cornerPulse {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }
    
    .corner-tl {
        top: 0;
        left: 0;
        border-right: none;
        border-bottom: none;
        border-radius: 8px 0 0 0;
    }
    
    .corner-tr {
        top: 0;
        right: 0;
        border-left: none;
        border-bottom: none;
        border-radius: 0 8px 0 0;
    }
    
    .corner-bl {
        bottom: 0;
        left: 0;
        border-right: none;
        border-top: none;
        border-radius: 0 0 0 8px;
    }
    
    .corner-br {
        bottom: 0;
        right: 0;
        border-left: none;
        border-top: none;
        border-radius: 0 0 8px 0;
    }
    
    .scan-target {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80px;
        height: 80px;
        background: rgba(37, 99, 235, 0.1);
        border: 2px solid var(--primary);
        border-radius: 8px;
        animation: targetPulse 2s ease-in-out infinite;
    }
    
    @keyframes targetPulse {
        0%, 100% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }
        50% {
            transform: translate(-50%, -50%) scale(1.1);
            opacity: 0.7;
        }
    }
    
    /* Floating Elements */
    .floating-element {
        position: absolute;
        width: 60px;
        height: 60px;
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }
    
    .floating-element svg {
        width: 30px;
        height: 30px;
        color: var(--primary);
    }
    
    .element-1 {
        top: 10%;
        right: -10%;
        animation: floatElement 4s ease-in-out infinite;
    }
    
    .element-2 {
        top: 60%;
        right: -5%;
        animation: floatElement 5s ease-in-out infinite;
        animation-delay: -2s;
    }
    
    .element-3 {
        bottom: 10%;
        left: -10%;
        animation: floatElement 6s ease-in-out infinite;
        animation-delay: -4s;
    }
    
    @keyframes floatElement {
        0%, 100% {
            transform: translateY(0) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(10deg);
        }
    }
    
    /* Features Section */
    .features-section {
        padding: 6rem 0;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 4rem;
        animation: fadeInUp 0.8s ease-out;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .section-badge {
        display: inline-block;
        padding: 0.5rem 1rem;
        background: rgba(37, 99, 235, 0.2);
        border: 1px solid rgba(37, 99, 235, 0.3);
        border-radius: 100px;
        color: var(--accent);
        font-size: 0.875rem;
        font-weight: 600;
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }
    
    .section-title {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 1rem;
        letter-spacing: -0.02em;
        color: var(--text-main);
    }
    
    .section-description {
        font-size: 1.125rem;
        color: var(--text-muted);
        max-width: 600px;
        margin: 0 auto;
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2rem;
    }
    
    .feature-card {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: 20px;
        padding: 2.5rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .feature-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.1), transparent);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .feature-card:hover {
        transform: translateY(-8px);
        border-color: var(--primary);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
    }
    
    .feature-card:hover::before {
        opacity: 1;
    }
    
    .feature-card.featured {
        border-color: var(--primary);
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.05), var(--bg-card));
    }
    
    .featured-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        padding: 0.375rem 0.875rem;
        background: linear-gradient(135deg, var(--primary), var(--gradient-end));
        color: white;
        border-radius: 100px;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .feature-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, rgba(37, 99, 235, 0.2), rgba(168, 85, 247, 0.2));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        transition: transform 0.3s ease;
    }
    
    .feature-card:hover .feature-icon {
        transform: scale(1.1) rotate(5deg);
    }
    
    .feature-icon svg {
        width: 30px;
        height: 30px;
        color: var(--primary);
    }
    
    .feature-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: var(--text-main);
    }
    
    .feature-description {
        font-size: 1rem;
        line-height: 1.6;
        color: var(--text-muted);
        margin-bottom: 1.5rem;
    }
    
    .feature-list {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    
    .feature-tag {
        padding: 0.375rem 0.875rem;
        background: rgba(37, 99, 235, 0.1);
        border: 1px solid rgba(37, 99, 235, 0.3);
        border-radius: 100px;
        color: var(--accent);
        font-size: 0.75rem;
        font-weight: 600;
    }
    
    /* CTA Section */
    .cta-section {
        position: relative;
        margin: 6rem auto;
        padding: 5rem 3rem;
        background: linear-gradient(135deg, var(--primary), var(--gradient-end));
        border-radius: 24px;
        overflow: hidden;
        text-align: center;
        max-width: 1200px;
    }
    
    .cta-content {
        position: relative;
        z-index: 2;
    }
    
    .cta-title {
        font-size: 3rem;
        font-weight: 800;
        color: white;
        margin-bottom: 1rem;
        letter-spacing: -0.02em;
    }
    
    .cta-description {
        font-size: 1.125rem;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 2.5rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .cta-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .cta-section .btn-primary {
        background: white;
        color: var(--primary);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    
    .cta-section .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
    }
    
    .cta-section .btn-secondary {
        background: rgba(255, 255, 255, 0.1);
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
    }
    
    .cta-section .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: white;
    }
    
    .cta-decoration {
        position: absolute;
        inset: 0;
        opacity: 0.1;
        z-index: 1;
    }
    
    .decoration-grid {
        width: 100%;
        height: 100%;
        background-image: 
            linear-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
        background-size: 50px 50px;
        animation: gridMove 20s linear infinite;
    }
    
    @keyframes gridMove {
        0% {
            transform: translate(0, 0);
        }
        100% {
            transform: translate(50px, 50px);
        }
    }
    
    /* Responsive Design */
    @media (max-width: 1024px) {
        .hero-section {
            grid-template-columns: 1fr;
            gap: 3rem;
            text-align: center;
        }
        
        .hero-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .hero-title {
            font-size: 3rem;
        }
        
        .hero-description {
            max-width: 100%;
        }
        
        .hero-buttons {
            justify-content: center;
        }
        
        .phone-mockup {
            width: 280px;
            height: 560px;
        }
        
        .floating-element {
            display: none;
        }
        
        .section-title {
            font-size: 2.5rem;
        }
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .hero-description {
            font-size: 1rem;
        }
        
        .hero-stats {
            flex-direction: column;
            gap: 1.5rem;
            padding: 1.5rem;
            width: 100%;
        }
        
        .stat-divider {
            width: 100%;
            height: 1px;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .features-grid {
            grid-template-columns: 1fr;
        }
        
        .cta-title {
            font-size: 2rem;
        }
        
        .cta-section {
            padding: 3rem 1.5rem;
            margin: 3rem 0;
        }
        
        .btn-large {
            width: 100%;
            justify-content: center;
        }
    }
    
    @media (max-width: 480px) {
        .homepage {
            padding: 1rem 1rem 3rem;
        }
        
        .hero-title {
            font-size: 2rem;
        }
        
        .hero-section {
            padding: 2rem 0;
            min-height: auto;
        }
        
        .phone-mockup {
            width: 240px;
            height: 480px;
        }
        
        .section-title {
            font-size: 1.75rem;
        }
        
        .feature-card {
            padding: 2rem;
        }
    }
</style>