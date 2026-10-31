<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'Laravel POS'); ?></title>
    <style>
        :root { --bg:#07111f; --panel:#0d1b2e; --panel2:#10243a; --ink:#e7f7ff; --muted:#91a9ba; --cyan:#38d9ff; --green:#6dffb0; --line:#1b3b52; --danger:#ff6b8a; }
        * { box-sizing:border-box; } html { min-height:100%; } body { margin:0; font-family:Consolas, 'Segoe UI', sans-serif; color:var(--ink); background:radial-gradient(circle at 80% 0%, #123652 0, transparent 34%), var(--bg); min-height:100vh; }
        body:before { content:""; position:fixed; inset:0; pointer-events:none; opacity:.12; background-image:linear-gradient(#38d9ff 1px,transparent 1px),linear-gradient(90deg,#38d9ff 1px,transparent 1px); background-size:42px 42px; mask-image:linear-gradient(to bottom,black,transparent 75%); }
        nav { position:relative; background:#07111fe8; border-bottom:1px solid var(--line); padding:18px 7%; display:flex; justify-content:space-between; align-items:center; backdrop-filter:blur(12px); }
        nav a { color:var(--ink); text-decoration:none; margin-left:22px; font-weight:700; font-size:14px; } nav a:hover { color:var(--cyan); } .brand { color:var(--cyan); letter-spacing:.08em; } .brand:before { content:'>'; color:var(--green); margin-right:6px; }
        main { position:relative; max-width:1100px; margin:0 auto; padding:70px 24px; } h1 { margin:0 0 14px; font-size:clamp(32px,5vw,58px); letter-spacing:-.04em; } h2 { margin-top:8px; color:var(--cyan); } p { line-height:1.7; color:var(--muted); }
        .eyebrow { color:var(--green); font-weight:700; letter-spacing:.12em; text-transform:uppercase; font-size:12px; } .eyebrow:before { content:'[ '; color:var(--cyan); } .eyebrow:after { content:' ]'; color:var(--cyan); }
        .hero { max-width:740px; } .hero p { font-size:17px; } .status { display:inline-flex; gap:9px; align-items:center; border:1px solid var(--line); background:#0c1d2d; border-radius:99px; padding:8px 13px; color:var(--green); font-size:12px; margin-top:25px; } .status i { width:8px; height:8px; border-radius:50%; background:var(--green); box-shadow:0 0 12px var(--green); }
        .cards { display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:18px; margin-top:34px; } .card { position:relative; background:linear-gradient(145deg,#10243a,#0a1728); border:1px solid var(--line); border-radius:5px; padding:26px; box-shadow:0 16px 35px #0005; } .card:after { content:'// secure module'; position:absolute; top:12px; right:14px; color:#477187; font-size:10px; } .card p { min-height:52px; }
        .button { display:inline-block; background:var(--cyan); color:#04101a; padding:12px 18px; border-radius:3px; text-decoration:none; font-weight:800; margin-top:14px; box-shadow:0 0 20px #38d9ff38; } .button:hover { background:var(--green); transform:translateY(-1px); }
        .page-head { display:flex; justify-content:space-between; align-items:end; gap:20px; } .count { color:var(--green); font-size:13px; } .table-wrap { overflow:auto; border:1px solid var(--line); margin-top:25px; box-shadow:0 16px 35px #0004; } table { width:100%; min-width:620px; border-collapse:collapse; background:#0b1929; } th,td { padding:16px; text-align:left; border-bottom:1px solid var(--line); } th { background:#112d43; color:var(--cyan); font-size:12px; letter-spacing:.08em; text-transform:uppercase; } td { color:#d9edf5; } tr:hover td { background:#10283a; } tr:last-child td { border-bottom:0; } .id { color:var(--green); }
        footer { position:relative; text-align:center; color:#587589; padding:20px; border-top:1px solid #102c40; font-size:12px; } code { color:var(--green); }
        @media (max-width:700px) { nav { align-items:flex-start; gap:15px; flex-direction:column; } nav a { margin:0 14px 0 0; } main { padding-top:45px; } .page-head { display:block; } }
    </style>
</head>
<body>
    <nav><a class="brand" href="<?php echo e(route('home')); ?>">LARAVEL_POS // ELOQUENT</a><div><a href="<?php echo e(route('home')); ?>">Dashboard</a><a href="<?php echo e(route('about')); ?>">System</a><a href="<?php echo e(route('customers.index')); ?>">Customers</a><a href="<?php echo e(route('users.index')); ?>">Users</a></div></nav>
    <main><?php echo $__env->yieldContent('content'); ?></main>
    <footer>IT0049 TFA6 &middot; Laravel Data Layer</footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\IT0049 TFA6 From Arrays to Eloquent\resources\views/layouts/app.blade.php ENDPATH**/ ?>