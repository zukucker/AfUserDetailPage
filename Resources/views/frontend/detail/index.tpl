{extends file="parent:frontend/detail/index.tpl"}

{block name="frontend_index_content"}
{$smarty.block.parent}
<script>
  $.ajax({
      url: "getuser",
      type: "GET",
      dataType:'json',
  })
  .done(function(response) {
    console.error(response);
  })
</script>
{/block}
