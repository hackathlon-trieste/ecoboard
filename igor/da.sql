INSERT INTO ambiente( `tempo` , `co` , `co2` , `no` , `no2` , `o3` , `so2` , `geiger` , `temperatura` , `pressione` , `umidita` , `h2s` )
SELECT CO2_A_TM, CO, CO2, NO, NO2, O3, SO2, GEIGER_C, TPU_T, TPU_P, TPU_H, H2S
FROM amb

INSERT INTO telecamere
SELECT 
    AnnoImm, 
    CameraName, 
    EuroClasse, 
    FROM_UNIXTIME( (
        telecamere.TempoPassaggio +262800000
    ) /1000 ) AS OraPassaggioS, 
    ProvImm, 
    telecamere.TempoPassaggio +262800000 AS TempoPassaggio
FROM `telecamere`
WHERE OraPassaggioS > '2016-03-16 08:00:00'
AND CameraName = 'Telecamera 1'
ORDER BY OraPassaggioS

(1458370790000 - 1458056110000)

fine: 2004 	Telecamera 1 	3 	2016-03-19 07:59:50 	TS 	1458370790000


 AIzaSyBO3W4tqtxdb94tTKMZrezLz9k-L2VbLmQ 
 https://maps.googleapis.com/maps/api/directions/json?origin=Toronto&destination=Montreal&key=%20AIzaSyBO3W4tqtxdb94tTKMZrezLz9k-L2VbLmQ
 
Object { type="FeatureCollection",  features=[270059]}

{
    "type": "FeatureCollection", "features": [{
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-118.382618, 34.084318]
        },
        "properties": {
            "name": null,
            "description": null,
            "created_at": "2014-11-18T13:16:51Z",
            "updated_at": "2014-11-18T13:16:51Z",
            "heading": 225,
            "id": 9237,
            "predictable": true,
            "route_id": 733,
            "run_id": "733_48_1",
            "seconds_since_report": 10057,
            "time_step_index": 5,
            "raw_data_id": 0,
            "time_stamp": "1416316585222",
            "approx_location": true,
            "frozen_vehicle": false,
            "cartodb_id": 75229,
            "speed_mph": null
        }
    }, {
        "type": "Feature",
        "geometry": {
            "type": "Point",
            "coordinates": [-118.382618, 34.084318]
        },
        "properties": {
            "name": null,
            "description": null,
            "created_at": "2014-11-18T13:16:51Z",
            "updated_at": "2014-11-18T13:16:51Z",
            "heading": 225,
            "id": 9237,
            "predictable": true,
            "route_id": 733,
            "run_id": "733_48_1",
            "seconds_since_report": 10057,
            "time_step_index": 5,
            "raw_data_id": 0,
            "time_stamp": "1416316585222",
            "approx_location": true,
            "frozen_vehicle": false,
            "cartodb_id": 75229,
            "speed_mph": null
        }]
}




SELECT
	DATE(FROM_UNIXTIME(ambiente.tempo/1000)) as amb_tempo,
	DATE( t.OraPassaggioS ) as tel_tempo
FROM telecamere as t 
LEFT JOIN ambiente ON DATE(FROM_UNIXTIME(ambiente.tempo/1000)) = DATE( t.OraPassaggioS )
WHERE 
		t.CameraName =  'Telecamera 1'
	AND t.OraPassaggioS <= NOW( )

SELECT
	DATE(FROM_UNIXTIME(ambiente.tempo/1000)) as amb_tempo,
	DATE( t.OraPassaggioS ) as tel_tempo
FROM telecamere as t 
LEFT JOIN ambiente ON ambiente.ts = t.OraPassaggioS
WHERE 
		t.CameraName =  'Telecamera 1'
	AND t.OraPassaggioS <= NOW( )


