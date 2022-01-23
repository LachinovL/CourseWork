var vue = new Vue({
	el: '#app',

	data: {
		showModal: false,
		deleteModal: false,
		updateModal: false,
		items: [
			'item'
		],  
		show: false,
	},

	methods: {
		open() {
			this.showModal = !this.showModal
		},
		opendelete() {
			this.deleteModal = !this.deleteModal
		},
		openupdate() {
			this.updateModal = !this.updateModal
		}

	}
	
})

