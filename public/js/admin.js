commentsVue = new Vue({
	el: '#root',
	data: {
		comments: [],
	},
	methods: {
		getComments: function() {
			var route = window.location.pathname;
			axios.get('/api'+ route).then(
				function(response) {
					commentsVue.comments = response.data.data;
				}
			);
		},
		changeStatus: function(commentId, changeTo) {
			var input = {'status_id': changeTo};
			axios.post('/api/admin/comments/'+commentId+'/changeStatus', input).then(
				function(response) {
					commentsVue.getComments();
				}
			);
		},
		destroy: function(commentId) {
			axios.post('/api/admin/comments/'+commentId+'/delete').then(
				function(response) {
					commentsVue.getComments();
				}
			);
		}

	},
	mounted: function() {
		this.getComments();
	}

});