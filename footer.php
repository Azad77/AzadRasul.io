{% if site.owner.google.ad-client and site.owner.google.ad-slot %}
<div class="google-ads">
  <!-- 320 x 50 ad -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <ins class="adsbygoogle"
       style="display:inline-block;width:320px;height:50px"
       data-ad-client="{{ site.owner.google.ad-client }}"
       data-ad-slot="{{ site.owner.google.ad-slot }}"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</div><!-- /.google-ads -->
{% endif %}
{% if site.creative-commons.cc-by %}
<span><a rel="license" href="https://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="https://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>. Powered by <a href="https://jekyllrb.com" rel="nofollow">Jekyll</a> using the <a href="https://ncsu-libraries.github.io/jekyll-academic/" rel="nofollow">Jekyll Academic</a> theme.
<br /></span>
{% elsif site.creative-commons.cc-by-nc %}
<span><a rel="license" href="https://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="https://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>. Powered by <a href="https://jekyllrb.com" rel="nofollow">Jekyll</a> using the <a href="https://ncsu-libraries.github.io/jekyll-academic/" rel="nofollow">Jekyll Academic</a> theme.
<br /></span>
{% else  %}
<span>&copy; {{ site.time | date: '%Y' }} {{ site.owner.name }}. Powered by <a href="https://jekyllrb.com" rel="nofollow">Jekyll</a> using the <a href="https://ncsu-libraries.github.io/jekyll-academic/" rel="nofollow">Jekyll Academic</a> theme.
<br /></span>
{% endif %}
