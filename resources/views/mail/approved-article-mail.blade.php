@component('mail::message')
# 🎉 Congratulations {{ $userName }}!

We're excited to inform you that your article has been **approved** by our team.
Thank you for contributing to our platform and helping us grow valuable content.

---

## 📝 Article Title:
**{{ $articleTitle }}**

## 🔗 Read Your Article:
@component('mail::button', ['url' => $articleUrl])
View Article
@endcomponent

If you have any edits or additions you'd like to make, feel free to update your article at any time from your profile.

---

Thanks again for being a valued member of our community! 🙌
Best regards,
**The Platform Team**

@endcomponent
