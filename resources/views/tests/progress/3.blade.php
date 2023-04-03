<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    @vite('resources/css/app.css')
    <title>Mobile Template</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }
    </style>
    <style>
        .content-bg {
            background-color: #fffbf0;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='260' height='260' viewBox='0 0 260 260'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23da291c' fill-opacity='0.06'%3E%3Cpath d='M24.37 16c.2.65.39 1.32.54 2H21.17l1.17 2.34.45.9-.24.11V28a5 5 0 0 1-2.23 8.94l-.02.06a8 8 0 0 1-7.75 6h-20a8 8 0 0 1-7.74-6l-.02-.06A5 5 0 0 1-17.45 28v-6.76l-.79-1.58-.44-.9.9-.44.63-.32H-20a23.01 23.01 0 0 1 44.37-2zm-36.82 2a1 1 0 0 0-.44.1l-3.1 1.56.89 1.79 1.31-.66a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .86.02l2.88-1.27a3 3 0 0 1 2.43 0l2.88 1.27a1 1 0 0 0 .85-.02l3.1-1.55-.89-1.79-1.42.71a3 3 0 0 1-2.56.06l-2.77-1.23a1 1 0 0 0-.4-.09h-.01a1 1 0 0 0-.4.09l-2.78 1.23a3 3 0 0 1-2.56-.06l-2.3-1.15a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1L.9 19.22a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01zm0-2h-4.9a21.01 21.01 0 0 1 39.61 0h-2.09l-.06-.13-.26.13h-32.31zm30.35 7.68l1.36-.68h1.3v2h-36v-1.15l.34-.17 1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0L2.26 23h2.59l1.36.68a3 3 0 0 0 2.56.06l1.67-.74h3.23l1.67.74a3 3 0 0 0 2.56-.06zM-13.82 27l16.37 4.91L18.93 27h-32.75zm-.63 2h.34l16.66 5 16.67-5h.33a3 3 0 1 1 0 6h-34a3 3 0 1 1 0-6zm1.35 8a6 6 0 0 0 5.65 4h20a6 6 0 0 0 5.66-4H-13.1z'/%3E%3Cpath id='path6_fill-copy' d='M284.37 16c.2.65.39 1.32.54 2H281.17l1.17 2.34.45.9-.24.11V28a5 5 0 0 1-2.23 8.94l-.02.06a8 8 0 0 1-7.75 6h-20a8 8 0 0 1-7.74-6l-.02-.06a5 5 0 0 1-2.24-8.94v-6.76l-.79-1.58-.44-.9.9-.44.63-.32H240a23.01 23.01 0 0 1 44.37-2zm-36.82 2a1 1 0 0 0-.44.1l-3.1 1.56.89 1.79 1.31-.66a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .86.02l2.88-1.27a3 3 0 0 1 2.43 0l2.88 1.27a1 1 0 0 0 .85-.02l3.1-1.55-.89-1.79-1.42.71a3 3 0 0 1-2.56.06l-2.77-1.23a1 1 0 0 0-.4-.09h-.01a1 1 0 0 0-.4.09l-2.78 1.23a3 3 0 0 1-2.56-.06l-2.3-1.15a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01zm0-2h-4.9a21.01 21.01 0 0 1 39.61 0h-2.09l-.06-.13-.26.13h-32.31zm30.35 7.68l1.36-.68h1.3v2h-36v-1.15l.34-.17 1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.56.06l1.67-.74h3.23l1.67.74a3 3 0 0 0 2.56-.06zM246.18 27l16.37 4.91L278.93 27h-32.75zm-.63 2h.34l16.66 5 16.67-5h.33a3 3 0 1 1 0 6h-34a3 3 0 1 1 0-6zm1.35 8a6 6 0 0 0 5.65 4h20a6 6 0 0 0 5.66-4H246.9z'/%3E%3Cpath d='M159.5 21.02A9 9 0 0 0 151 15h-42a9 9 0 0 0-8.5 6.02 6 6 0 0 0 .02 11.96A8.99 8.99 0 0 0 109 45h42a9 9 0 0 0 8.48-12.02 6 6 0 0 0 .02-11.96zM151 17h-42a7 7 0 0 0-6.33 4h54.66a7 7 0 0 0-6.33-4zm-9.34 26a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-4.34a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-4.34a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-7a7 7 0 1 1 0-14h42a7 7 0 1 1 0 14h-9.34zM109 27a9 9 0 0 0-7.48 4H101a4 4 0 1 1 0-8h58a4 4 0 0 1 0 8h-.52a9 9 0 0 0-7.48-4h-42z'/%3E%3Cpath d='M39 115a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm6-8a6 6 0 1 1-12 0 6 6 0 0 1 12 0zm-3-29v-2h8v-6H40a4 4 0 0 0-4 4v10H22l-1.33 4-.67 2h2.19L26 130h26l3.81-40H58l-.67-2L56 84H42v-6zm-4-4v10h2V74h8v-2h-8a2 2 0 0 0-2 2zm2 12h14.56l.67 2H22.77l.67-2H40zm13.8 4H24.2l3.62 38h22.36l3.62-38z'/%3E%3Cpath d='M129 92h-6v4h-6v4h-6v14h-3l.24 2 3.76 32h36l3.76-32 .24-2h-3v-14h-6v-4h-6v-4h-8zm18 22v-12h-4v4h3v8h1zm-3 0v-6h-4v6h4zm-6 6v-16h-4v19.17c1.6-.7 2.97-1.8 4-3.17zm-6 3.8V100h-4v23.8a10.04 10.04 0 0 0 4 0zm-6-.63V104h-4v16a10.04 10.04 0 0 0 4 3.17zm-6-9.17v-6h-4v6h4zm-6 0v-8h3v-4h-4v12h1zm27-12v-4h-4v4h3v4h1v-4zm-6 0v-8h-4v4h3v4h1zm-6-4v-4h-4v8h1v-4h3zm-6 4v-4h-4v8h1v-4h3zm7 24a12 12 0 0 0 11.83-10h7.92l-3.53 30h-32.44l-3.53-30h7.92A12 12 0 0 0 130 126z'/%3E%3Cpath d='M212 86v2h-4v-2h4zm4 0h-2v2h2v-2zm-20 0v.1a5 5 0 0 0-.56 9.65l.06.25 1.12 4.48a2 2 0 0 0 1.94 1.52h.01l7.02 24.55a2 2 0 0 0 1.92 1.45h4.98a2 2 0 0 0 1.92-1.45l7.02-24.55a2 2 0 0 0 1.95-1.52L224.5 96l.06-.25a5 5 0 0 0-.56-9.65V86a14 14 0 0 0-28 0zm4 0h6v2h-9a3 3 0 1 0 0 6H223a3 3 0 1 0 0-6H220v-2h2a12 12 0 1 0-24 0h2zm-1.44 14l-1-4h24.88l-1 4h-22.88zm8.95 26l-6.86-24h18.7l-6.86 24h-4.98zM150 242a22 22 0 1 0 0-44 22 22 0 0 0 0 44zm24-22a24 24 0 1 1-48 0 24 24 0 0 1 48 0zm-28.38 17.73l2.04-.87a6 6 0 0 1 4.68 0l2.04.87a2 2 0 0 0 2.5-.82l1.14-1.9a6 6 0 0 1 3.79-2.75l2.15-.5a2 2 0 0 0 1.54-2.12l-.19-2.2a6 6 0 0 1 1.45-4.46l1.45-1.67a2 2 0 0 0 0-2.62l-1.45-1.67a6 6 0 0 1-1.45-4.46l.2-2.2a2 2 0 0 0-1.55-2.13l-2.15-.5a6 6 0 0 1-3.8-2.75l-1.13-1.9a2 2 0 0 0-2.5-.8l-2.04.86a6 6 0 0 1-4.68 0l-2.04-.87a2 2 0 0 0-2.5.82l-1.14 1.9a6 6 0 0 1-3.79 2.75l-2.15.5a2 2 0 0 0-1.54 2.12l.19 2.2a6 6 0 0 1-1.45 4.46l-1.45 1.67a2 2 0 0 0 0 2.62l1.45 1.67a6 6 0 0 1 1.45 4.46l-.2 2.2a2 2 0 0 0 1.55 2.13l2.15.5a6 6 0 0 1 3.8 2.75l1.13 1.9a2 2 0 0 0 2.5.8zm2.82.97a4 4 0 0 1 3.12 0l2.04.87a4 4 0 0 0 4.99-1.62l1.14-1.9a4 4 0 0 1 2.53-1.84l2.15-.5a4 4 0 0 0 3.09-4.24l-.2-2.2a4 4 0 0 1 .97-2.98l1.45-1.67a4 4 0 0 0 0-5.24l-1.45-1.67a4 4 0 0 1-.97-2.97l.2-2.2a4 4 0 0 0-3.09-4.25l-2.15-.5a4 4 0 0 1-2.53-1.84l-1.14-1.9a4 4 0 0 0-5-1.62l-2.03.87a4 4 0 0 1-3.12 0l-2.04-.87a4 4 0 0 0-4.99 1.62l-1.14 1.9a4 4 0 0 1-2.53 1.84l-2.15.5a4 4 0 0 0-3.09 4.24l.2 2.2a4 4 0 0 1-.97 2.98l-1.45 1.67a4 4 0 0 0 0 5.24l1.45 1.67a4 4 0 0 1 .97 2.97l-.2 2.2a4 4 0 0 0 3.09 4.25l2.15.5a4 4 0 0 1 2.53 1.84l1.14 1.9a4 4 0 0 0 5 1.62l2.03-.87zM152 207a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm6 2a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-11 1a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-6 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3-5a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-8 8a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm0 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4 7a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm5-2a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm5 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4-6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm6-4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-4-3a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4-3a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-5-4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-24 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm16 5a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm7-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0zm86-29a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm19 9a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-14 5a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-25 1a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm5 4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm9 0a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm15 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm12-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-11-14a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-19 0a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm6 5a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-25 15c0-.47.01-.94.03-1.4a5 5 0 0 1-1.7-8 3.99 3.99 0 0 1 1.88-5.18 5 5 0 0 1 3.4-6.22 3 3 0 0 1 1.46-1.05 5 5 0 0 1 7.76-3.27A30.86 30.86 0 0 1 246 184c6.79 0 13.06 2.18 18.17 5.88a5 5 0 0 1 7.76 3.27 3 3 0 0 1 1.47 1.05 5 5 0 0 1 3.4 6.22 4 4 0 0 1 1.87 5.18 4.98 4.98 0 0 1-1.7 8c.02.46.03.93.03 1.4v1h-62v-1zm.83-7.17a30.9 30.9 0 0 0-.62 3.57 3 3 0 0 1-.61-4.2c.37.28.78.49 1.23.63zm1.49-4.61c-.36.87-.68 1.76-.96 2.68a2 2 0 0 1-.21-3.71c.33.4.73.75 1.17 1.03zm2.32-4.54c-.54.86-1.03 1.76-1.49 2.68a3 3 0 0 1-.07-4.67 3 3 0 0 0 1.56 1.99zm1.14-1.7c.35-.5.72-.98 1.1-1.46a1 1 0 1 0-1.1 1.45zm5.34-5.77c-1.03.86-2 1.79-2.9 2.77a3 3 0 0 0-1.11-.77 3 3 0 0 1 4-2zm42.66 2.77c-.9-.98-1.87-1.9-2.9-2.77a3 3 0 0 1 4.01 2 3 3 0 0 0-1.1.77zm1.34 1.54c.38.48.75.96 1.1 1.45a1 1 0 1 0-1.1-1.45zm3.73 5.84c-.46-.92-.95-1.82-1.5-2.68a3 3 0 0 0 1.57-1.99 3 3 0 0 1-.07 4.67zm1.8 4.53c-.29-.9-.6-1.8-.97-2.67.44-.28.84-.63 1.17-1.03a2 2 0 0 1-.2 3.7zm1.14 5.51c-.14-1.21-.35-2.4-.62-3.57.45-.14.86-.35 1.23-.63a2.99 2.99 0 0 1-.6 4.2zM275 214a29 29 0 0 0-57.97 0h57.96zM72.33 198.12c-.21-.32-.34-.7-.34-1.12v-12h-2v12a4.01 4.01 0 0 0 7.09 2.54c.57-.69.91-1.57.91-2.54v-12h-2v12a1.99 1.99 0 0 1-2 2 2 2 0 0 1-1.66-.88zM75 176c.38 0 .74-.04 1.1-.12a4 4 0 0 0 6.19 2.4A13.94 13.94 0 0 1 84 185v24a6 6 0 0 1-6 6h-3v9a5 5 0 1 1-10 0v-9h-3a6 6 0 0 1-6-6v-24a14 14 0 0 1 14-14 5 5 0 0 0 5 5zm-17 15v12a1.99 1.99 0 0 0 1.22 1.84 2 2 0 0 0 2.44-.72c.21-.32.34-.7.34-1.12v-12h2v12a3.98 3.98 0 0 1-5.35 3.77 3.98 3.98 0 0 1-.65-.3V209a4 4 0 0 0 4 4h16a4 4 0 0 0 4-4v-24c.01-1.53-.23-2.88-.72-4.17-.43.1-.87.16-1.28.17a6 6 0 0 1-5.2-3 7 7 0 0 1-6.47-4.88A12 12 0 0 0 58 185v6zm9 24v9a3 3 0 1 0 6 0v-9h-6z'/%3E%3Cpath d='M-17 191a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm19 9a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H3a1 1 0 0 1-1-1zm-14 5a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-25 1a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm5 4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm9 0a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm15 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm12-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2H4zm-11-14a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-19 0a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm6 5a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-25 15c0-.47.01-.94.03-1.4a5 5 0 0 1-1.7-8 3.99 3.99 0 0 1 1.88-5.18 5 5 0 0 1 3.4-6.22 3 3 0 0 1 1.46-1.05 5 5 0 0 1 7.76-3.27A30.86 30.86 0 0 1-14 184c6.79 0 13.06 2.18 18.17 5.88a5 5 0 0 1 7.76 3.27 3 3 0 0 1 1.47 1.05 5 5 0 0 1 3.4 6.22 4 4 0 0 1 1.87 5.18 4.98 4.98 0 0 1-1.7 8c.02.46.03.93.03 1.4v1h-62v-1zm.83-7.17a30.9 30.9 0 0 0-.62 3.57 3 3 0 0 1-.61-4.2c.37.28.78.49 1.23.63zm1.49-4.61c-.36.87-.68 1.76-.96 2.68a2 2 0 0 1-.21-3.71c.33.4.73.75 1.17 1.03zm2.32-4.54c-.54.86-1.03 1.76-1.49 2.68a3 3 0 0 1-.07-4.67 3 3 0 0 0 1.56 1.99zm1.14-1.7c.35-.5.72-.98 1.1-1.46a1 1 0 1 0-1.1 1.45zm5.34-5.77c-1.03.86-2 1.79-2.9 2.77a3 3 0 0 0-1.11-.77 3 3 0 0 1 4-2zm42.66 2.77c-.9-.98-1.87-1.9-2.9-2.77a3 3 0 0 1 4.01 2 3 3 0 0 0-1.1.77zm1.34 1.54c.38.48.75.96 1.1 1.45a1 1 0 1 0-1.1-1.45zm3.73 5.84c-.46-.92-.95-1.82-1.5-2.68a3 3 0 0 0 1.57-1.99 3 3 0 0 1-.07 4.67zm1.8 4.53c-.29-.9-.6-1.8-.97-2.67.44-.28.84-.63 1.17-1.03a2 2 0 0 1-.2 3.7zm1.14 5.51c-.14-1.21-.35-2.4-.62-3.57.45-.14.86-.35 1.23-.63a2.99 2.99 0 0 1-.6 4.2zM15 214a29 29 0 0 0-57.97 0h57.96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="flex flex-col bg-white mx-3 my-3 overflow-y-hidden">

    <div id="app" class="absolute text-sm">
        <resolution-display></resolution-display>
    </div>

    <!-- header section -->
    <header class="flex-none w-full rounded-t-[2rem] h-sm:bg-indigo-100 h-md:bg-indigo-300 h-40">
        <div class="text-center text-white font-bold py-2 flex items-center justify-center h-full">

            <!-- header content section -->
            <div class="-mt-[2.5rem] text-center">
                <div class="w-12 h-lg:w-24 mx-auto text-[#FFC72C]">
                    <!-- logo -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-40.605 -59.125 351.91 354.75"><path d="M194.5 16.8c23.3 0 42.2 98.3 42.2 219.7h34C270.7 105.8 236.4 0 194.4 0c-24 0-45.2 31.7-59.2 81.5C121.2 31.7 100 0 76.2 0 34.2 0 0 105.7 0 236.4h34C34 115 52.7 16.8 76 16.8s42.2 90.8 42.2 202.8H152c0-112 19-202.8 42.3-202.8" fill="currentColor"/></svg>
                    <!-- /logo -->
                </div>
                <p class="text-[#FFC72C]">McDonalds Kaiseraugst</p>
            </div>
            <!-- /header content section -->

        </div>
    </header>
    <!-- /header section -->
    <!-- content section -->
    <main class="bg-white flex-grow w-full overflow-y-auto rounded-t-[2rem] mt-[-2rem] content-bg">
        <!-- content main area -->
        <div class="text-center py-2 flex flex-col items-center justify-center h-full border-4 border-[#DA291C] content-bg">
            <div class="w-[90%]">
                <p class="text-xl font-bold px-3 pb-8">Choose an option</p>
                <div class="flex flex-col gap-12">
                    <button class="w-full h-[5rem] bg-[#FFBC0d] rounded-r-[2rem] rounded-tl-[2rem] flex justify-between items-center">
                        <div class="px-3">
                            <div class="h-14 w-14 rounded-tl-full rounded-r-full bg-white text-[#DA291C] flex items-center justify-center">
                                <svg class="w-7 h-7" viewBox="0 0 15 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_83_844)">
                                        <path d="M7.73484 0C8.02838 0.127202 8.34639 0.220157 8.61547 0.386497C8.93347 0.577299 9.12916 0.895303 9.26615 1.25245C9.69179 1.25245 10.1125 1.25245 10.5382 1.25245C11.0029 1.25245 11.2476 1.49706 11.2476 1.96184C11.2476 2.73483 11.2476 3.50783 11.2476 4.28571C11.2476 4.75538 11.0029 5 10.5431 5C8.51272 5 6.48239 5 4.45206 5C3.99218 5 3.74756 4.75049 3.74756 4.28571C3.74756 3.51272 3.74756 2.73973 3.74756 1.96184C3.74756 1.49706 3.99218 1.25245 4.45695 1.25245C4.8777 1.25245 5.30333 1.25245 5.72897 1.25245C5.94912 0.709393 6.31116 0.327789 6.85421 0.122309C6.98631 0.0733855 7.12818 0.0440313 7.26517 0.00489237C7.42173 0 7.57828 0 7.73484 0Z" fill="currentColor"/>
                                        <path d="M12.5 2.50002C12.9501 2.50002 13.3659 2.49024 13.7818 2.50491C14.4667 2.52938 14.9609 3.0284 15 3.71333C15.0049 3.76714 15.0049 3.81607 15.0049 3.86988C15.0049 8.79161 15.0049 13.7133 15.0049 18.635C15.0049 19.183 14.8141 19.6233 14.3102 19.863C14.1243 19.9511 13.8992 19.9951 13.6888 20C9.55969 20.0098 5.43542 20.0049 1.30626 20.0049C0.528376 20.0049 0.00489237 19.4814 0.00489237 18.7035C0 13.7329 0 8.76714 0 3.80139C0 3.04307 0.533268 2.5147 1.29159 2.50491C1.68787 2.50002 2.08415 2.50491 2.5 2.50491C2.5 2.75932 2.5 2.99904 2.5 3.23877C2.50489 3.67908 2.47554 4.12918 2.52446 4.5646C2.63209 5.55775 3.37573 6.24268 4.37378 6.25247C6.45793 6.26714 8.54207 6.26714 10.6213 6.25247C11.7025 6.24268 12.4853 5.42566 12.5 4.33955C12.5049 3.80139 12.5 3.25834 12.5 2.72018C12.5 2.64679 12.5 2.58319 12.5 2.50002ZM4.39824 9.77986C4.1047 9.47654 3.86008 9.22213 3.61057 8.97752C3.32192 8.68887 2.9501 8.67419 2.6908 8.92859C2.42661 9.18789 2.44129 9.5646 2.73483 9.86303C3.11644 10.2446 3.49804 10.6262 3.87965 11.0078C4.20254 11.3307 4.5499 11.3307 4.86791 11.0127C5.67025 10.2153 6.46771 9.41294 7.27006 8.61059C7.5636 8.31705 7.57828 7.93544 7.3092 7.67615C7.0499 7.42174 6.67808 7.44131 6.38943 7.72507C5.77299 8.34151 5.15656 8.95795 4.54012 9.57438C4.49119 9.6282 4.45695 9.69669 4.39824 9.77986ZM4.39824 14.726C4.36399 14.7163 4.3591 14.7163 4.35421 14.7114C4.0998 14.4619 3.8454 14.2075 3.591 13.9579C3.42466 13.7916 3.22407 13.7133 2.98924 13.772C2.5 13.8895 2.34344 14.4619 2.70548 14.8288C3.08708 15.2202 3.47847 15.6018 3.86497 15.9883C4.21722 16.3356 4.5499 16.3405 4.89726 15.9932C5.50391 15.3865 6.11057 14.7799 6.71722 14.1732C6.9227 13.9677 7.13796 13.7671 7.33366 13.547C7.66145 13.185 7.49021 12.6321 7.01566 12.5196C6.76125 12.4609 6.56067 12.5587 6.38454 12.7349C5.72407 13.4002 5.05871 14.0656 4.39824 14.726ZM10.6458 8.75247C10.2446 8.75247 9.83855 8.75247 9.43738 8.75247C9.0362 8.75736 8.75734 9.01176 8.75245 9.3738C8.74755 9.73583 9.03131 10 9.42759 10.0049C10.2299 10.0098 11.0274 10.0098 11.8297 10.0049C12.226 10.0049 12.5049 9.74073 12.5049 9.3738C12.5 9.01176 12.2211 8.75736 11.82 8.75247C11.4237 8.74757 11.0372 8.75247 10.6458 8.75247ZM10.6213 15C11.0225 15 11.4286 15.0049 11.8297 15C12.2162 14.9951 12.4902 14.7358 12.4951 14.3836C12.5 14.0215 12.2211 13.7525 11.8249 13.7525C11.0225 13.7476 10.225 13.7476 9.4227 13.7525C9.02642 13.7525 8.74755 14.0167 8.74755 14.3787C8.74755 14.7407 9.02642 15 9.42759 15C9.82877 15 10.225 15 10.6213 15Z" fill="currentColor"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_83_844">
                                            <rect width="15" height="20" fill="currentColor"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="text-[#FFBC0d] font-bold text-xl text-white w-full text-left">Give feedback</div>
                        <div class="border-l-4 border-white h-10 text-3xl flex items-center justify-center px-4 text-white font-bold">
                            <div class="w-6 h-6">
                                <svg viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.93333 17.6C6.0301 17.697 6.14504 17.7739 6.2716 17.8265C6.39815 17.879 6.53382 17.906 6.67083 17.906C6.80785 17.906 6.94352 17.879 7.07007 17.8265C7.19662 17.7739 7.31157 17.697 7.40833 17.6L14.4167 10.5916C14.4939 10.5145 14.5552 10.423 14.597 10.3222C14.6388 10.2214 14.6604 10.1133 14.6604 10.0041C14.6604 9.895 14.6388 9.78693 14.597 9.68612C14.5552 9.58531 14.4939 9.49374 14.4167 9.41664L7.40833 2.40831C7 1.99998 6.34167 1.99998 5.93333 2.40831C5.525 2.81664 5.525 3.47498 5.93333 3.88331L12.05 9.99998L5.925 16.125C5.525 16.5333 5.525 17.1916 5.93333 17.6Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </button>

                    <button class="w-full h-[5rem] bg-[#FFBC0d] rounded-r-[2rem] rounded-tl-[2rem] flex justify-between items-center">
                        <div class="px-3">
                            <div class="h-14 w-14 rounded-tl-full rounded-r-full bg-white text-[#DA291C] flex items-center justify-center">
                                <svg class="w-7 h-7" viewBox="0 0 23 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_83_856)">
                                <path d="M8.88962 17.9967C8.75782 17.9967 8.66557 17.9967 8.56672 17.9967C6.66227 17.9967 4.75124 17.9967 2.84679 17.9967C1.15321 17.9967 -8.93604e-07 16.8435 -8.93604e-07 15.1499C-8.93604e-07 12.6326 -0.00659068 10.1219 -8.93604e-07 7.60463C-8.93604e-07 6.2669 0.863261 5.18617 2.15486 4.9094C2.35914 4.86327 2.57661 4.8435 2.79407 4.8435C4.90939 4.83692 7.01812 4.8435 9.13344 4.8435C9.17957 4.8435 9.23229 4.85009 9.31137 4.85668C9.31137 5.37728 9.27842 5.89128 9.32455 6.40528C9.37068 6.91929 9.50247 7.42011 9.60132 7.96047C9.52224 7.96047 9.42339 7.96047 9.33114 7.96047C7.94728 7.96047 6.57002 7.96047 5.18616 7.96047C4.72488 7.96047 4.43492 8.16476 4.32949 8.55355C4.19769 9.02143 4.52059 9.48271 5.00165 9.53543C5.10049 9.54202 5.19934 9.54202 5.29819 9.54202C6.92586 9.54202 8.55354 9.54202 10.1812 9.53543C10.3591 9.53543 10.458 9.58815 10.5634 9.73313C10.7809 10.0363 11.0181 10.3262 11.2751 10.6491C11.1631 10.6491 11.0774 10.6491 10.9918 10.6491C9.05437 10.6491 7.11038 10.6491 5.17298 10.6491C4.81713 10.6491 4.54695 10.7677 4.3888 11.0906C4.14497 11.5914 4.46787 12.1582 5.02801 12.2241C5.10708 12.2307 5.19275 12.2307 5.27183 12.2307C7.51894 12.2307 9.75947 12.2307 12.0066 12.2307C12.3427 12.2307 12.6458 12.1713 12.8633 11.8682C14.2273 12.659 15.6903 12.9621 17.2718 12.8106C17.2718 13.0148 17.2718 13.1994 17.2718 13.3773C17.2586 14.1681 17.2982 14.9588 17.2191 15.743C17.0873 16.9951 15.9473 17.9769 14.6886 18.0099C14.2142 18.0231 13.7331 18.0033 13.2586 18.0231C13.1137 18.0297 12.9489 18.0692 12.8303 18.1483C11.9671 18.7018 11.1038 19.262 10.2471 19.8287C9.95058 20.0264 9.64745 20.1054 9.32455 19.9209C9.00165 19.743 8.9028 19.4399 8.90939 19.0906C8.89621 18.7216 8.88962 18.3789 8.88962 17.9967ZM6.86656 14.8863C7.43987 14.8863 8.01977 14.8929 8.59308 14.8863C9.07413 14.8797 9.42339 14.5437 9.42339 14.0956C9.42339 13.6475 9.06754 13.3114 8.58649 13.3114C7.43328 13.3114 6.28665 13.3114 5.13344 13.3114C4.6458 13.3114 4.29654 13.6409 4.28995 14.089C4.28336 14.5437 4.63921 14.8863 5.13344 14.8863C5.71334 14.8929 6.29324 14.8863 6.86656 14.8863Z" fill="currentColor"/>
                                <path d="M16.4547 11.2554C13.3575 11.2422 10.8402 8.70512 10.8534 5.60133C10.8666 2.51072 13.397 -0.00657688 16.4877 1.29086e-05C19.5849 0.00660269 22.1153 2.54367 22.1087 5.64746C22.089 8.75125 19.5585 11.262 16.4547 11.2554ZM17.7661 8.36904C18.1285 8.34268 18.425 8.13181 18.5371 7.8155C18.6557 7.47942 18.5437 7.12357 18.2339 6.90611C17.799 6.60298 17.3509 6.30644 16.9028 6.02308C16.6194 5.84515 16.3295 5.84515 16.0461 6.02308C15.6046 6.30644 15.1631 6.59639 14.7348 6.89293C14.3526 7.15652 14.2603 7.6244 14.5041 7.99342C14.7479 8.36245 15.2092 8.44812 15.6112 8.19771C15.8616 8.03955 16.0989 7.86822 16.3559 7.71665C16.4218 7.67711 16.5404 7.67711 16.6063 7.71665C16.8633 7.86822 17.1005 8.04614 17.3509 8.19771C17.4761 8.27678 17.6211 8.31632 17.7661 8.36904ZM18.3328 3.28173C17.8979 3.28832 17.5552 3.63098 17.5552 4.05932C17.5552 4.49425 17.9176 4.85669 18.3526 4.8501C18.7743 4.84351 19.1367 4.48107 19.1367 4.05932C19.1367 3.63757 18.7677 3.28173 18.3328 3.28173ZM15.4003 4.05932C15.3937 3.61781 15.0577 3.28173 14.6162 3.28173C14.1812 3.28173 13.832 3.63098 13.8254 4.05932C13.8188 4.48766 14.2076 4.86328 14.6293 4.85669C15.0643 4.8501 15.4069 4.49425 15.4003 4.05932Z" fill="currentColor"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_83_856">
                                <rect width="22.1021" height="20" fill="currentColor"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="font-bold text-xl text-white w-full text-left">Make a complain</div>
                        <div class="border-l-4 border-white h-10 text-3xl flex items-center justify-center px-4 text-white font-bold">
                            <div class="w-6 h-6 text-[#DA291C]">
                                <svg viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.93333 17.6C6.0301 17.697 6.14504 17.7739 6.2716 17.8265C6.39815 17.879 6.53382 17.906 6.67083 17.906C6.80785 17.906 6.94352 17.879 7.07007 17.8265C7.19662 17.7739 7.31157 17.697 7.40833 17.6L14.4167 10.5916C14.4939 10.5145 14.5552 10.423 14.597 10.3222C14.6388 10.2214 14.6604 10.1133 14.6604 10.0041C14.6604 9.895 14.6388 9.78693 14.597 9.68612C14.5552 9.58531 14.4939 9.49374 14.4167 9.41664L7.40833 2.40831C7 1.99998 6.34167 1.99998 5.93333 2.40831C5.525 2.81664 5.525 3.47498 5.93333 3.88331L12.05 9.99998L5.925 16.125C5.525 16.5333 5.525 17.1916 5.93333 17.6Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </button>

                    <button class="w-full h-[5rem] bg-[#FFBC0d] rounded-r-[2rem] rounded-tl-[2rem] flex justify-between items-center">
                        <div class="px-3">
                            <div class="h-14 w-14 rounded-tl-full rounded-r-full bg-white text-[#DA291C] flex items-center justify-center">
                                <svg class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_101_295)">
                                        <path d="M11.4811 0C11.5789 0.0234788 11.6807 0.0508707 11.7785 0.0743494C12.8898 0.352182 13.6842 1.30699 13.7077 2.45353C13.7312 3.59225 13.7155 4.73097 13.7155 5.86969C13.7155 5.90882 13.7077 5.94404 13.6999 6.00274C13.6177 6.00274 13.5433 6.00274 13.4651 6.00274C11.8372 6.00665 10.2133 5.991 8.5854 6.01839C6.93015 6.04578 5.36881 7.46625 5.16142 9.10976C5.09881 9.5989 5.11837 10.0959 5.10272 10.5889C5.09881 10.6711 5.10272 10.7533 5.10272 10.8668C4.75054 10.765 4.59401 11.0115 4.40618 11.1994C3.94443 11.6572 3.48268 12.115 3.02876 12.5807C2.83311 12.7803 2.61397 12.8742 2.34396 12.7764C2.0857 12.6825 1.96048 12.4711 1.95656 12.1385C1.95265 11.7355 1.95265 11.3324 1.96048 10.9294C1.96439 10.8159 1.92135 10.7728 1.8196 10.7376C0.872628 10.4363 0.293485 9.79065 0.0586969 8.82802C0.0352182 8.7341 0.0195656 8.64019 0 8.54627C0 6.4371 0 4.32792 0 2.21874C0.0117394 2.19527 0.0273919 2.1757 0.031305 2.15222C0.246527 1.04089 0.911759 0.348268 2.00744 0.0586969C2.08178 0.0391313 2.15222 0.0195656 2.22657 0C5.31012 0 8.39757 0 11.4811 0Z" fill="curentColor"/>
                                        <path d="M13.1324 7.17668C14.5451 7.17668 15.9577 7.17277 17.3704 7.17668C18.9082 7.1806 19.9961 8.28019 20 9.81413C20 11.3716 20.0039 12.9251 20 14.4825C20 14.9169 20.0196 15.359 19.9648 15.7895C19.8395 16.8265 19.2565 17.5269 18.2821 17.8869C18.1021 17.9534 18.0239 18.02 18.0356 18.2234C18.0552 18.5874 18.0395 18.9513 18.0434 19.3152C18.0434 19.6048 17.9456 19.8435 17.6638 19.957C17.386 20.0704 17.163 19.957 16.9634 19.7535C16.443 19.2252 15.9108 18.7048 15.3942 18.1765C15.2925 18.0747 15.1908 18.0395 15.0538 18.0395C13.0111 18.0434 10.9685 18.0434 8.92192 18.0434C7.74798 18.0434 6.79709 17.3939 6.42926 16.3295C6.35099 16.1064 6.29621 15.8599 6.29621 15.6251C6.28447 13.6138 6.27273 11.6024 6.29621 9.59109C6.31186 8.31149 7.40754 7.2119 8.68713 7.18842C10.1702 7.16103 11.6533 7.1806 13.1364 7.1806C13.1324 7.1806 13.1324 7.1806 13.1324 7.17668ZM12.4398 13.1716C12.1189 12.8468 11.8176 12.5416 11.5124 12.2364C11.2424 11.9703 10.8863 11.9507 10.6437 12.1894C10.3972 12.432 10.405 12.7842 10.6789 13.0581C11.1133 13.4964 11.5515 13.9347 11.9898 14.369C12.2755 14.6508 12.6042 14.6586 12.8859 14.3768C13.7938 13.4729 14.7016 12.5651 15.6016 11.6572C15.8599 11.395 15.8638 11.0389 15.6212 10.8042C15.3786 10.5655 15.0342 10.5733 14.7681 10.8355C14.2359 11.3598 13.7077 11.892 13.1794 12.4203C12.9407 12.6668 12.6981 12.9133 12.4398 13.1716Z" fill="currentColor"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_101_295">
                                            <rect width="20" height="20" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="font-bold text-xl text-white w-full text-left">Thank us</div>
                        <div class="border-l-4 border-white h-10 text-3xl flex items-center justify-center px-4 text-white font-bold">
                            <div class="w-6 h-6">
                                <svg viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.93333 17.6C6.0301 17.697 6.14504 17.7739 6.2716 17.8265C6.39815 17.879 6.53382 17.906 6.67083 17.906C6.80785 17.906 6.94352 17.879 7.07007 17.8265C7.19662 17.7739 7.31157 17.697 7.40833 17.6L14.4167 10.5916C14.4939 10.5145 14.5552 10.423 14.597 10.3222C14.6388 10.2214 14.6604 10.1133 14.6604 10.0041C14.6604 9.895 14.6388 9.78693 14.597 9.68612C14.5552 9.58531 14.4939 9.49374 14.4167 9.41664L7.40833 2.40831C7 1.99998 6.34167 1.99998 5.93333 2.40831C5.525 2.81664 5.525 3.47498 5.93333 3.88331L12.05 9.99998L5.925 16.125C5.525 16.5333 5.525 17.1916 5.93333 17.6Z" fill="white"/>
                                </svg>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <!-- /content area -->
    </main>
    <!-- /content section-->
    <footer class="bg-[#DA291C] flex-none w-full rounded-b-[2rem] mb-6 h-14">
        <div class="text-white font-bold py-1 flex items-center justify-between h-full px-[15%]">
            <!-- Home footer link -->
            <div class="-mt-6 flex flex-col items-center justify-center">
                <div class="w-20 text-[#DA291C]">
                    <svg viewBox="0 0 81 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 18V18C7.66561 18 15.0111 14.858 20.315 9.3235V9.3235C31.4413 -2.28657 50.0289 -2.31763 61.1553 9.29244L61.5431 9.69713C66.626 15.001 73.6538 18 81 18V18H0Z" fill="currentColor"/>
                    </svg>
                </div>
                <div class="-mt-2 w-10 h-10 rounded-full bg-[#FFC72C] mx-auto flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-[#DA291C] w-7 h-7">
                      <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                      <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                    </svg>
                </div>
                <p class="text-xs text-[#FFC72C]">Home</p>
            </div>

            <!-- Survey footer link: -ml-10 to make it horizontally centered -->
            <div class="text-[#D08B86] -ml-10">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                </svg>
            </div>

            <!-- Promo/last information footer link -->
            <div class="text-[#D08B86]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path fill-rule="evenodd" d="M12 1.5c-1.921 0-3.816.111-5.68.327-1.497.174-2.57 1.46-2.57 2.93V21.75a.75.75 0 001.029.696l3.471-1.388 3.472 1.388a.75.75 0 00.556 0l3.472-1.388 3.471 1.388a.75.75 0 001.029-.696V4.757c0-1.47-1.073-2.756-2.57-2.93A49.255 49.255 0 0012 1.5zm3.53 7.28a.75.75 0 00-1.06-1.06l-6 6a.75.75 0 101.06 1.06l6-6zM8.625 9a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm5.625 3.375a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </footer>
    @vite('resources/js/app.js')
</body>
</html>