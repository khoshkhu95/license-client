<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>فعال‌سازی لایسنس</title>
    <style>
        body { font-family: Tahoma, sans-serif; background: #f4f5f7; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; }
        .card { background: #fff; border-radius: 10px; padding: 2rem; box-shadow: 0 2px 10px rgba(0,0,0,.08); width: 100%; max-width: 420px; }
        h2 { margin-top: 0; }
        input[type=text] { width: 100%; padding: .65rem; border: 1px solid #d1d5db; border-radius: 6px; margin-top: .4rem; box-sizing: border-box; font-size: 1rem; letter-spacing: 1px; }
        label { font-size: .85rem; font-weight: 600; color: #374151; }
        .btn { width: 100%; padding: .7rem; border-radius: 6px; background: #2563eb; color: #fff; border: none; font-size: 1rem; cursor: pointer; margin-top: 1.25rem; }
        .btn-danger { background: #dc2626; }
        .status-ok { background: #ecfdf5; color: #065f46; padding: .7rem 1rem; border-radius: 6px; margin-bottom: 1rem; font-size: .9rem; }
        .status-bad { background: #fef2f2; color: #991b1b; padding: .7rem 1rem; border-radius: 6px; margin-bottom: 1rem; font-size: .9rem; }
        .meta { font-size: .8rem; color: #6b7280; margin-top: 1rem; }
    </style>
</head>
<body>
<div class="card">
    <h2>فعال‌سازی برنامه</h2>

    @if (session('status'))
        <div class="status-ok">{{ session('status') }}</div>
    @endif

    @if ($status)
        @if ($status['valid'])
            <div class="status-ok">
                ✔ لایسنس این نصب فعال و معتبر است.
            </div>
            <form action="{{ route('license.activate.destroy') }}" method="POST" onsubmit="return confirm('غیرفعال‌سازی لایسنس این نصب انجام شود؟')">
                @csrf
                <button type="submit" class="btn btn-danger">غیرفعال‌سازی این نصب</button>
            </form>
        @else
            <div class="status-bad">
                ✖ {{ $status['message'] ?? 'لایسنس معتبر نیست.' }}
            </div>
        @endif
    @endif

    @if (! $status || ! $status['valid'])
        <form action="{{ route('license.activate.store') }}" method="POST">
            @csrf

            <label for="license_key">کلید لایسنس</label>
            <input type="text" id="license_key" name="license_key"
                   value="{{ old('license_key') }}"
                   placeholder="XXXXX-XXXXX-XXXXX-XXXXX" required autofocus>

            @error('license_key')
                <div class="status-bad" style="margin-top:.6rem">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn">فعال‌سازی</button>
        </form>
    @endif

    <div class="meta">کلید لایسنس را از ایمیل خرید یا پنل کاربری خود دریافت کنید.</div>
</div>
</body>
</html>
