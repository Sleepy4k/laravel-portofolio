export default function Jumbotron({ owner }) {
    return (
        <>
            <section className="jumbotron text-center">
                {owner.image === null ? (
                    <img
                        src="/image/jumbotron/ayang.jpg"
                        alt={owner.name}
                        width="200"
                        className="rounded-circle inline-block img-thumbnail shadow-sm"
                    />
                ) : (
                    <img
                        src={`/storage/image/${owner.image}`}
                        alt={owner.name}
                        width="200"
                        className="rounded-circle inline-block img-thumbnail shadow-sm"
                    />
                )}
                <h1 className="display-4">{owner.name}</h1>
                <p className="lead">
                    {owner.hobby} | {owner.interest}
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path
                        fill="#0d6efd"
                        fillOpacity="1"
                        d="M0,32L60,69.3C120,107,240,181,360,208C480,235,600,213,720,181.3C840,149,960,107,1080,85.3C1200,64,1320,64,1380,64L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
                    ></path>
                </svg>
            </section>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="#0d6efd"
                    fillOpacity="1"
                    d="M0,288L48,266.7C96,245,192,203,288,197.3C384,192,480,224,576,197.3C672,171,768,85,864,69.3C960,53,1056,107,1152,149.3C1248,192,1344,224,1392,240L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
                ></path>
            </svg>
        </>
    );
}
