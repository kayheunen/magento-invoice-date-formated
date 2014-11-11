# Magento transactional e-mail invoice date formatting
=============================

A nice way to format the invoice date on transactional e-mails.
Only tested on the invoice transactional e-mails.

**Variables Examples**
```
{{var invoice.getCreatedAtFormated('long')}}
{{var invoice.getCreatedAtFormated('medium')}}
{{var invoice.getCreatedAtFormated('short')}}
```