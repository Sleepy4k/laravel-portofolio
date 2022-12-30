export default function Jumbotron({ owner }) {
    return (
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
                    fill="#3c82f3a9"
                    fillOpacity="1"
                    d="M0,32L60,69.3C120,107,240,181,360,208C480,235,600,213,720,181.3C840,149,960,107,1080,85.3C1200,64,1320,64,1380,64L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
                ></path>
            </svg>
        </section>
    );
}
