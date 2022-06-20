self.addEventListener('install', function(e) {
	e.waitUntil(
		caches.open('v1').then(function(cache) {
			return cache.addAll([
				// '/',
			]);
		})
	);
});

self.addEventListener('fetch', function(event) {
	// event.respondWith(
	// 	networkOrCache(event.request)
	// 	.catch(() => useFallback())
	// );
	
	// e.respondWith(
	// 	caches.match(e.request).then(function(response) {
	// 		console.log(response)
	// 		return response || fetch(e.request);
	// 	})
	// );
});

function networkOrCache(request) {
	return fetch(request)
	.then((response) => response.ok ? response : fromCache(request))
	.catch(() => fromCache(request));
}

function fromCache(request) {
	return caches.open(CACHE).then((cache) =>
		cache.match(request).then((matching) =>
			matching || Promise.reject('no-match')
		));
}

self.addEventListener('activate', (event) => {
	event.waitUntil(self.clients.claim());
});