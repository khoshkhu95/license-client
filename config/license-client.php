<?php

return [
    // آدرس سرور لایسنس شما
    'server_url' => env('LICENSE_SERVER_URL', 'https://license.yourcompany.com'),

    // کلید لایسنس این نصب - از فایل فروش/ایمیل مشتری دریافت می‌شود
    'key' => env('LICENSE_KEY'),

    // بعد از فعال‌سازی موفق، توسط LicenseManager در storage/framework ذخیره و از اینجا خوانده می‌شود
    // (این مقدار را دستی در .env قرار ندهید مگر فعال‌سازی را از قبل انجام داده باشید)
    'instance_token' => env('LICENSE_INSTANCE_TOKEN'),

    // secret مشترک برای امضای HMAC درخواست‌های خروجی به سرور لایسنس
    'shared_secret' => env('LICENSE_SHARED_SECRET'),

    // کلید عمومی Ed25519 سرور لایسنس - برای تأیید امضای پاسخ‌ها (این مقدار علنی است)
    'public_key' => env('LICENSE_SERVER_PUBLIC_KEY'),

    // مدت زمانی که نتیجهٔ آخرین اعتبارسنجی موفق، بدون تماس مجدد با سرور معتبر تلقی می‌شود
    'fresh_ttl_hours' => env('LICENSE_FRESH_TTL_HOURS', 6),

    // حداکثر مدت زمانی که در صورت قطعی ارتباط با سرور، آخرین وضعیت معتبر پذیرفته می‌شود
    'grace_period_hours' => env('LICENSE_GRACE_PERIOD_HOURS', 72),
];
