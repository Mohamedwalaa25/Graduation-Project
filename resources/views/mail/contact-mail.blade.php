@component('mail::message')
# 📬 New Message from Your Website

You have received a new message from a visitor on your website.

---

**👤 Name:** {{ $name }}
**📧 Email:** {{ $email }}
**📞 Phone:** {{ $phone }}

---

## 💬 Message Content:

{{ $content }}

---

Thank you,
Your Website Team
@endcomponent
