
var Cache1 = persistence.define('Cache',{
	cid: "TEXT",
	uid: "TEXT",
	tb: "TEXT",
	op: "TEXT",
	data: "TEXT",
	fr: "TEXT",
	to: "TEXT",
	nv: "TEXT",
	pv: "TEXT",
//	id: "TEXT",
	dataid: "TEXT",
	ut: "TEXT"
});

var cacheModel = {
	cid: "TEXT",
	uid: "TEXT",
	tb: "TEXT",
	op: "TEXT",
	data: "TEXT",
	fr: "TEXT",
	to: "TEXT",
	nv: "TEXT",
	pv: "TEXT",
	dataid: "TEXT",
	ut: "TEXT"
};
var Cache = persistence.define('Cache',cacheModel);
