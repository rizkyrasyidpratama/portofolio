<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <style>
            body {
                margin: 0;
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #fdfdfc;
                color: #1b1b18;
                font-family: ui-sans-serif, system-ui, sans-serif;
            }
            main { text-align: center; padding: 24px; }
            h1 { font-size: 28px; margin: 0 0 8px; }
            p { color: #706f6c; margin: 0; }
            @media (prefers-color-scheme: dark) {
                body { background: #0a0a0a; color: #ededec; }
                p { color: #a1a09a; }
            }
        </style>
    </head>
    <body>
        <main>
            <h1>Portofolio — Rizky Rasyid Pratama</h1>
            <p>Latihan 5a: RESTful API (GET Endpoints) · Laravel {{ app()->version() }}</p>
        </main>

        <!-- Panel Status API — Bukti Pengerjaan Latihan 5a -->
        <div style="position:fixed; bottom:20px; right:20px; background:#0f172a; color:#f1f5f9;
                    padding:20px 24px; border-radius:12px; font-family:monospace; font-size:13px;
                    box-shadow: 0 4px 24px rgba(0,0,0,0.4); max-width: 340px; line-height:1.7;">
            <div style="color:#38bdf8; font-weight:bold; font-size:14px; margin-bottom:8px;">
                🚀 API Status — Latihan 5a
            </div>
            <div>🎓 <strong>{{ 'Rizky Rasyid Pratama' }}</strong></div>
            <div>🆔 NPM: <strong>{{ '24312116' }}</strong></div>
            <div>📦 Laravel: <strong>{{ app()->version() }}</strong></div>
            <hr style="border-color:#334155; margin:10px 0;">
            <div style="color:#86efac; font-size:12px; font-weight:bold; margin-bottom:4px;">ENDPOINT AKTIF:</div>
            @foreach([
                '/api/portfolio/profile',
                '/api/portfolio/skills',
                '/api/portfolio/projects',
                '/api/portfolio/experiences',
                '/api/portfolio/certificates',
            ] as $endpoint)
            <div>
                <span style="color:#fbbf24;">GET</span>
                <a href="{{ url($endpoint) }}" target="_blank"
                   style="color:#93c5fd; text-decoration:none;">{{ $endpoint }}</a>
            </div>
            @endforeach
        </div>
    </body>
</html>