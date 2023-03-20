<script>
  import { count } from '$lib/stores/inputStore';

	function increment() {
		count.update(n => n + 1);
	}
</script>

<button on:click={increment}>
	+
</button>