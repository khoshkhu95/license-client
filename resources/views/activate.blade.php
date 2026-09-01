<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>فعال‌سازی لایسنس</title>
    <link href="{{ asset('fonts/fonts.css') }}" rel="stylesheet">
    <style>
        body { font-family: 'Vazirmatn',Tahoma, sans-serif; background: #f4f5f7; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; }
        .card { background: #fff; border-radius: 10px; padding: 2rem; box-shadow: 0 2px 10px rgba(0,0,0,.08); width: 100%; max-width: 420px; }
        h2 { margin-top: 0; }
        input[type=text] { width: 100%; padding: .65rem; border: 1px solid #d1d5db; border-radius: 6px; margin-top: .4rem; box-sizing: border-box; font-size: 1rem; letter-spacing: 1px; }
        textarea { width: 100%; padding: .65rem; border: 1px solid #d1d5db; border-radius: 6px; margin-top: .4rem; box-sizing: border-box; font-size: 1rem; letter-spacing: 1px; }
        label { font-size: .85rem; font-weight: 600; color: #374151; }
        .btn { width: 100%; padding: .7rem; border-radius: 6px; background: #2563eb; color: #fff; border: none; font-size: 1rem; cursor: pointer; margin-top: 1.25rem; }
        .btn-danger { background: #dc2626; }
        .status-ok { background: #ecfdf5; color: #065f46; padding: .7rem 1rem; border-radius: 6px; margin-bottom: 1rem; font-size: .9rem; }
        .status-bad { background: #fef2f2; color: #991b1b; padding: .7rem 1rem; border-radius: 6px; margin-bottom: 1rem; font-size: .9rem; }
        .meta { font-size: .8rem; color: #6b7280; margin-top: 1rem; }
        .divider { border-top: 1px solid #e5e7eb; margin: 1.25rem 0; }
    </style>
</head>
<body>
<div class="card">
    <h2>فعال‌سازی برنامه</h2>

    @if (session('status'))
        <div class="status-ok">{{ session('status') }}</div>
    @endif

    {{-- بخش وضعیت فعلی: فقط نمایشی است، هیچ‌وقت فرم را پنهان نمی‌کند --}}
    @if ($status)
        @if ($status['valid'])
            <div class="status-ok">
                ✔ لایسنس این نصب فعال و معتبر است.
            </div>
            <a href="{{ config('license-client.post_activate_redirect', '/') }}" class="btn" style="display:block;text-align:center;text-decoration:none;box-sizing:border-box">
                رفتن به صفحهٔ اصلی
            </a>
            <form action="{{ route('license.activate.destroy') }}" method="POST" onsubmit="return confirm('غیرفعال‌سازی لایسنس این نصب انجام شود؟')">
                @csrf
                <button type="submit" class="btn btn-danger">غیرفعال‌سازی این نصب</button>
            </form>
            <div class="divider"></div>
            <div class="meta" style="margin-top:0">برای جایگزینی با لایسنس دیگر، مقادیر جدید را زیر وارد کنید:</div>
        @else
            <div class="status-bad">
                ✖ {{ $status['message'] ?? 'لایسنس معتبر نیست.' }}
            </div>
        @endif
    @endif

    {{-- فرم همیشه نمایش داده می‌شود؛ حتی وقتی لایسنس فعلی معتبر است (برای امکان جایگزینی)
         و حتی وقتی تلاش قبلی ناموفق بوده (تا پیام خطا دیده شود) --}}
    <form action="{{ route('license.activate.store') }}" method="POST">
        @csrf

        <label for="license_key">کلید لایسنس</label>
        <input type="text" id="license_key" name="license_key"
               value="{{ old('license_key') }}"
               placeholder="XXXXX-XXXXX-XXXXX-XXXXX" required autofocus autocomplete="off">

        @error('license_key')
            <div class="status-bad" style="margin-top:.6rem">{{ $message }}</div>
        @enderror

        <label for="shared_secret" style="margin-top:1rem">Shared Secret</label>
        <textarea type="text" id="shared_secret" name="shared_secret"
               placeholder="مقداری که همراه کلید لایسنس دریافت کرده‌اید" required></textarea>

        @error('shared_secret')
            <div class="status-bad" style="margin-top:.6rem">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn">
            {{ $status['valid'] ?? false ? 'اعمال لایسنس جدید' : 'فعال‌سازی' }}
        </button>
    </form>

    <div class="meta">کلید لایسنس و Shared Secret را از فروشنده یا ایمیل خرید دریافت کنید.</div>
</div>
</body>
</html>
