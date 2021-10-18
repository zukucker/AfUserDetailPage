{extends file="parent:frontend/detail/index.tpl"}

{block name="frontend_index_javascript_async_ready"}
{$smarty.block.parent}
<script>
window.addEventListener('load', () =>{
  $.ajax({
      url: "/staging/getuser",
      type: "GET",
      dataType:'json',
  })
  .done(function(response) {
    console.error(response);
  })
});
</script>
{/block}
